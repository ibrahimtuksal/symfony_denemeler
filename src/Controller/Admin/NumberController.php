<?php

namespace App\Controller\Admin;

use App\Entity\Number;
use App\Form\NumberChangeFormType;
use App\Form\NumberFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NumberController extends AbstractController
{
    /**
     * @Route("/admin/number", name="number_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $number = $em->getRepository(Number::class)->findAll();

        return $this->render('admin/number/index.html.twig', [
            'numbers' => $number
        ]);
    }

    /**
     * @Route("/admin/number/create", name="number_create")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $number = new Number();

        $form = $this->createForm(NumberFormType::class, $number);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $number->setIsActive(true);
            $em->persist($number);
            $em->flush();

            $this->addFlash('number_create', "Numara Başarıyla Eklendi <i class='fas fa-plus'></i>");

            return $this->redirectToRoute('number_create');
        }

        return $this->render('admin/number/create.html.twig',[
            'numberform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/number/update/{id}", name="number_update")
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $number = $em->getRepository(Number::class)->find($id);

        $form = $this->createForm(NumberChangeFormType::class, $number);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();

            $this->addFlash('number_update', "Numara Başarıyla Güncellendi <i class='fas fa-pencil-alt'></i>");

            return $this->redirectToRoute('number_home');
        }

        return $this->render('admin/number/update.html.twig', [
            'numberform' => $form->createView()
        ]);
    }
    /**
     * @Route("/admin/number/delete/{id}", name="number_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();

        $number = $em->getRepository(Number::class)->find($id);
        $em->remove($number);
        $em->flush();

        $this->addFlash('number_delete', "Numara Başarıyla Silindi <i class='fas fa-trash'></i>");

        return $this->redirectToRoute('number_home');
    }

    /**
     * @Route("/admin/number/operation/{id}", name="number_operation")
     */
    public function operation($id)
    {
        $em = $this->getDoctrine()->getManager();

        $number = $em->getRepository(Number::class)->find($id);
        $number->setIsActive($number->getIsActive()? FALSE : TRUE);
        $em->flush();
        $this->addFlash('number_operation', "İşlem Başarılı");

        return $this->redirectToRoute('number_home');
    }

}
