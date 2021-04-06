<?php

namespace App\Controller\Admin;

use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\Hizmetler;
use App\Form\ContentChangeFormType;
use App\Form\ContentFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ContentController extends AbstractController
{
    private $fileSystem;

    public function __construct()
    {
        $this->fileSystem = new Filesystem();
    }

    /**
     * @Route("/admin/content", name="content_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $contents = $em->getRepository(Content::class)->findAll();

        return $this->render('admin/content/index.html.twig',[
            'contents' => $contents
        ]);
    }

    /**
     * @Route("/admin/content/create", name="content_create")
     */
    public function create(Request $request, SluggerInterface $slugger): Response
    {
        $content = new Content();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ContentFormType::class,$content);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) {
            $brochureFile  = $form->get('photo')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

                $content->setPhoto("uploads/brochures/".$newFilename);
            }

            $slugify = new Slugify();
            $slug = $slugify->slugify($content->getIsim());

            $bolgeId=$form->get('bolge')->getData();
            $hizmetId=$form->get('hizmet')->getData();

            $bolge=$em->getRepository(Bolgeler::class)->find($bolgeId);
            $hizmet=$em->getRepository(Hizmetler::class)->find($hizmetId);
            $content
                ->setBolge($bolge)
                ->setHizmet($hizmet)
                ->setCreatedAt( new \DateTime())
                ->setSlug($slug)
            ;

            $em->persist($content);
            $em->flush();

            $this->addFlash('content_create',"İçerik Başarıyla Eklendi");

            return $this->redirectToRoute('content_home');
        }

        return $this->render('admin/content/create.html.twig', [
            'contentform'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/content/update/{id}", name="content_update")
     */
    public function update(Request $request, $id, SluggerInterface $slugger)
    {
        $em = $this->getDoctrine()->getManager();

        $content = $em->getRepository(Content::class)->find($id);
        $lastPhoto = $content->getPhoto();
        $form=$this->createForm(ContentChangeFormType::class, $content);

        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){
            $slugify = new Slugify();
            $slug = $slugify->slugify($content->getIsim());
            $bolgeId=$form->get('bolge')->getData();
            $hizmetId=$form->get('hizmet')->getData();

            $bolge=$em->getRepository(Bolgeler::class)->find($bolgeId);
            $hizmet=$em->getRepository(Hizmetler::class)->find($hizmetId);

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
                    $filesystem->remove($lastPhoto);
                    $content->setPhoto("uploads/brochures/".$newFilename);
                } catch (FileException $e) {

                }
            } else {
                $content->setPhoto($lastPhoto);
            }
            $content
                ->setBolge($bolge)
                ->setHizmet($hizmet)
                ->setCreatedAt( new \DateTime())
                ->setSlug($slug)
            ;
             $em->flush();
            $this->addFlash('content_updated',"İçerik Başarıyla Güncellendi <i class='fas fa-pencil-alt'></i>");
             return $this->redirectToRoute('content_home');
        }
        return $this->render('admin/content/update.html.twig', [
            'changeform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/content/delete/{id}", name="content_delete")
     */
    public function delete($id)
    {
        $em=$this->getDoctrine()->getManager();

        $content=$em->getRepository(Content::class)->find($id);
        $lastPhoto = $content->getPhoto();

        $filesystem = new Filesystem();
        $filesystem->remove($lastPhoto);

        $em->remove($content);

        $em->flush();

        $this->addFlash('content_delete',"İçerik Başarıyla Silindi <i class='fas fa-trash'></i>");

        return $this->redirectToRoute('content_home');
    }

}
