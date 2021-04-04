<?php

namespace App\Controller\Admin;

use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\Hizmetler;
use App\Form\ContentChangeFormType;
use App\Form\ContentFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
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
    public function create(Request $request): Response
    {
        $content = new Content();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ContentFormType::class,$content);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) {
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
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $content = $em->getRepository(Content::class)->find($id);
        $form=$this->createForm(ContentChangeFormType::class, $content);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){
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
        $em->remove($content);
        $em->flush();
        $this->addFlash('content_delete',"İçerik Başarıyla Silindi <i class='fas fa-trash'></i>");
        return $this->redirectToRoute('content_home');
    }

}
