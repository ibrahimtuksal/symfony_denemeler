<?php

namespace App\Controller\Admin;

use App\Entity\Bolgeler;
use App\Form\BolgelerFormType;
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
}