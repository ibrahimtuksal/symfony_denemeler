<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use App\Form\ContentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{
    /**
     * @Route("/admin/content", name="content_home")
     */
    public function index(Request $request): Response
    {
        $content = new Content();
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(ContentFormType::class,$content);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ) {
            $em->persist($content);
            $em->flush();
            $this->addFlash('content_create',"İçerik Başarıyla Eklendi");
            return $this->redirectToRoute('content_list');
        }

        return $this->render('admin/content/index.html.twig', [
            'contentform'=>$form->createView()
        ]);
    }
}
