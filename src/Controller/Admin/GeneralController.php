<?php

namespace App\Controller\Admin;

use App\Entity\General;
use App\Form\GeneralFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/admin/general", name="general_home")
     */
    public function index(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $generalSettings = $em->getRepository(General::class)->find(1);

        $form = $this->createForm(GeneralFormType::class, $generalSettings);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();

            $this->addFlash('general_update', "Genel Ayarlar Güncellendi <i class='fas fa-pencil-alt'></i>");

            return $this->redirectToRoute('general_home');
        }

        return $this->render('admin/general/index.html.twig', [
            'generalform' => $form->createView()
        ]);
    }
}
