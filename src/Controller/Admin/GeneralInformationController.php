<?php

namespace App\Controller\Admin;

use App\Entity\GeneralInformation;
use App\Form\GeneralInformationChangeFormType;
use App\Form\GeneralInformationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralInformationController extends AbstractController
{
    /**
     * @Route("/admin/generalinformation", name="generali_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $generalInformation = $em->getRepository(GeneralInformation::class)->findBy([], ['desk' => 'asc']);

        return $this->render('admin/general_information/index.html.twig', [
            'generals' => $generalInformation
        ]);
    }
    /**
     * @Route("/admin/generalinformation/create", name="generali_create")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $generalInformation = new GeneralInformation();

        $form = $this->createForm(GeneralInformationFormType::class, $generalInformation);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){
            $em->persist($generalInformation);
            $em->flush();

            $this->addFlash('generali_create', "Genel Ayar Eklendi <i class='fas fa-add'></i>");

            return $this->redirectToRoute('generali_home');
        }

       return $this->render('admin/general_information/create.html.twig', [
            'generaliform' => $form->createView()
       ]);
    }

    /**
     * @Route("/admin/generalinformation/update/{id}", name="generali_update")
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $generalInformation = $em->getRepository(GeneralInformation::class)->find($id);

        $form = $this->createForm(GeneralInformationChangeFormType::class, $generalInformation);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){
            $em->flush();

            $this->addFlash('generali_update', "Genel Ayar Güncellendi <i class='fas fa-pencil-alt'></i>");

            return $this->redirectToRoute('generali_home');
        }

        return $this->render('admin/general_information/update.html.twig', [
            'generaliform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/generalinformation/remove/{id}", name="generali_remove")
     */
    public function remove($id)
    {
        $em = $this->getDoctrine()->getManager();

        $generalInformation = $em->getRepository(GeneralInformation::class)->find($id);
        $em->remove($generalInformation);
        $em->flush();

        $this->addFlash('generali_remove', "Genel Ayar Silindi <i class='fas fa-trash'></i>");

        return $this->redirectToRoute('generali_home');
    }

    /**
     * @Route("/admin/generalinformation/info", name="generali_info")
     */
    public function info(){
        return $this->render('admin/general_information/icon.html.twig');
    }
}
