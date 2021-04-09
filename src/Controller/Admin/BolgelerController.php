<?php

namespace App\Controller\Admin;

use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Form\BolgelerFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BolgelerController extends AbstractController
{
    /**
     * @Route("/admin/bolgeler", name="bolgeler_home")
     */
    public function index()
    {
        $bolgeler=$this->getDoctrine()->getRepository(Bolgeler::class)->findAll();
        return $this->render('admin/bolgeler/index.html.twig', ['bolgeler'=>$bolgeler]);
    }

    /**
     * @Route("/admin/bolgeler/create", name="bolgeler_create")
     */
    public function create(Request $request): Response
    {
        $bolgeler=new Bolgeler();
        $em=$this->getDoctrine()->getManager();
        $form = $this->createForm(BolgelerFormType::class, $bolgeler);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $em->persist($bolgeler);
            $em->flush();
            $this->addFlash('bolge_add',"Bölge Eklendi <i class='fas fa-add'></i>");
            return $this->redirectToRoute('bolgeler_home');
        }
        return $this->render('admin/bolgeler/create.html.twig', [
            'bolgeform'=>$form->createView()
        ]);
    }

    /**
     * @Route("/admin/content/slug/{id}", name="content_slug")
     */
    public function slug($id)
    {
        $em = $this->getDoctrine()->getManager();

        $bolgeler = $em->getRepository(Bolgeler::class)->find($id);

        $slugify = new Slugify();

        $slugControl = $bolgeler->getIsim();
        $slug = $slugify->slugify($slugControl);

        $bolgeler->setSlug($slug);
        $em->flush();

        return $this->redirectToRoute('bolgeler_home');
    }
}