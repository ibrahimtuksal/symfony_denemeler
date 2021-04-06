<?php

namespace App\Controller\Admin;

use App\Entity\SSS;
use App\Form\SSSChangeFormType;
use App\Form\SSSFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SSSController extends AbstractController
{
    /**
     * @Route("/admin/sss", name="sss_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $sss = $em->getRepository(SSS::class)->findAll();

        return $this->render('admin/sss/index.html.twig', [
            'sssall' => $sss
        ]);
    }

    /**
     * @Route("admin/sss/create", name="sss_create")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $sss = new SSS();

        $form = $this->createForm(SSSFormType::class, $sss);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($sss);
            $em->flush();
            return $this->redirectToRoute('sss_home');
        }

        return $this->render('admin/sss/create.html.twig', [
            'sssform' => $form->createView()
        ]);
    }

    /**
     * @Route("admim/sss/update/{id}", name="sss_update")
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $sss = $em->getRepository(SSS::class)->find($id);
        $form = $this->createForm(SSSChangeFormType::class, $sss);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('ssschanged',"S.S.S Başarıyla Güncellendi <i class='fas fa-pencil-alt'></i>");
            return $this->redirectToRoute('sss_home');
        }

        return $this->render('admin/sss/update.html.twig', [
            'sssform' => $form->createView()
        ]);
    }

    /**
     * @Route("admin/sss/delete/{id}", name="sss_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();

        $sss = $em->getRepository(SSS::class)->find($id);

        $em->remove($sss);
        $em->flush();

        return $this->redirectToRoute('sss_home');
    }
}
