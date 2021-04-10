<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use App\Entity\Hizmetler;
use App\Form\HizmetlerChangeFormType;
use App\Form\HizmetlerFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class  HizmetController extends AbstractController
{
    /**
     * @Route("admin/hizmet", name="hizmet_home")
     */
    public function index(): Response
    {
        $hizmet =$this->getDoctrine()->getRepository(Hizmetler::class)->findAll();
        return $this->render('admin/hizmet/index.html.twig', [
            'hizmetler'=>$hizmet
        ]);
    }
    /**
     * @Route("admin/hizmet/create", name="hizmet_create")
     */
    public function hizmetAdd(Request $request, SluggerInterface $slugger): Response
    {
        $hizmet = new Hizmetler();
        $form = $this->createForm(HizmetlerFormType::class, $hizmet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $slugControl = $form->get('isim')->getData();
            $hizmetlerControl = $this->getDoctrine()->getRepository(Hizmetler::class)->findOneBy(['slug' => $slugControl]);

            $brochureFile  = $form->get('photo')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

                $hizmet->setPhoto("uploads/brochures/".$newFilename);
            }

            $slugify = new Slugify();
            $slugControl = $form->get('isim')->getData();
            $dataSlug = $slugify->slugify($slugControl);
            $hizmetlerControl = $this->getDoctrine()->getRepository(Hizmetler::class)->findOneBy(['slug' => $dataSlug]);
            if (!$hizmetlerControl){
                $slug = $slugify->slugify($form->get('isim')->getData());
                $hizmet->setSlug($slug);
            } else {
                $this->addFlash('hizmet_already',"<i class='fas fa-exclamation'></i> <br> Böyle Bir Hizmet İsmi Var <br> Hizmet Eklenemedi");

                return $this->redirectToRoute('hizmet_home');
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($hizmet);
            $em->flush();

            $this->addFlash('hizmet_add',"Hizmet Başarıyla Eklendi");

            return $this->redirectToRoute('hizmet_create');

        }
        return $this->render('admin/hizmet/create.html.twig', [
                'hizmetform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/hizmet/update/{id}", name="hizmet_update")
     */
    public function update(Request $request, $id, SluggerInterface $slugger)
    {
        $hizmetler = $this->getDoctrine()->getRepository(Hizmetler::class)->find($id);
        $lastPhoto = $hizmetler->getPhoto();
        $form=$this->createForm(HizmetlerChangeFormType::class,$hizmetler);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {

            $brochureFile  = $form->get('photo')->getData();
            if ($brochureFile){

                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                    $filesystem = new Filesystem();
                    if ($lastPhoto){
                        $filesystem->remove($lastPhoto);
                    }
                    $hizmetler->setPhoto("uploads/brochures/".$newFilename);
                } catch (FileException $e) {

                }
            } else {
                $hizmetler->setPhoto($lastPhoto);
            }

            $slugify = new Slugify();
            $slugControl = $form->get('isim')->getData();
            $dataSlug = $slugify->slugify($slugControl);
            $hizmetlerControl = $this->getDoctrine()->getRepository(Hizmetler::class)->findOneBy(['slug' => $dataSlug]);
            if (!$hizmetlerControl){
                $slug = $slugify->slugify($form->get('isim')->getData());
                $hizmetler->setSlug($slug);
            } else {
                $this->addFlash('hizmet_already',"<i class='fas fa-exclamation'></i> <br> Böyle Bir Hizmet İsmi Var <br> Hizmet Güncellenemedi");

                return $this->redirectToRoute('hizmet_home');
            }

            $em=$this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('hizmet_updated',"Hizmet Başarıyla Güncellendi <i class='fas fa-pencil-alt'></i>");

            return $this->redirectToRoute('hizmet_home');
        }
        return $this->render('admin/hizmet/update.html.twig',
        [
            'updateform'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/hizmet/delete/{id}", name="hizmet_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();

        $hizmet_id = $em->getRepository(Hizmetler::class)->find($id);

        $em->remove($hizmet_id);
        $em->flush();

        $this->addFlash('hizmet_delete',"Hizmet Başarıyla Silindi <i class='fas fa-trash'></i>");

        return $this->redirectToRoute('hizmet_home');
    }
}
