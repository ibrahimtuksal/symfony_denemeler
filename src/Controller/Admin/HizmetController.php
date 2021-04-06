<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use App\Entity\Hizmetler;
use App\Form\HizmetlerChangeFormType;
use App\Form\HizmetlerFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HizmetController extends AbstractController
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
    public function hizmetAdd(Request $request): Response
    {
        $hizmet = new Hizmetler();
        $form = $this->createForm(HizmetlerFormType::class, $hizmet);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $slugify = new Slugify();
            $slug = $slugify->slugify($hizmet->getIsim());
            $hizmet->setSlug($slug);
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
    public function update(Request $request, $id)
    {;
        $hizmetler=$this->getDoctrine()->getRepository(Hizmetler::class)->find($id);
        $form=$this->createForm(HizmetlerChangeFormType::class,$hizmetler);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
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
