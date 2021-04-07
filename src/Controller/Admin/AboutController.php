<?php

namespace App\Controller\Admin;

use App\Entity\About;
use App\Form\AboutChangeFormType;
use App\Form\AboutFormType;
use Cocur\Slugify\Slugify;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/admin/about", name="about_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $about = $em->getRepository(About::class)->findAll();

        return $this->render('admin/about/index.html.twig', [
            'about' => $about
        ]);
    }
    /**
     * @Route("/admin/about/create", name="about_create")
     */
    public function create(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $about = new About();

        $form  = $this->createForm(AboutFormType::class, $about);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $slugify = new Slugify();
            $slug = $slugify->slugify($about->getTitle());
            $about->setSlug($slug);
            $em->persist($about);
            $em->flush();

            $this->addFlash('about_create', "Sayfa Eklendi <i class='fas fa-add'></i>");

            return $this->redirectToRoute('about_home');
        }

        return $this->render('admin/about/create.html.twig', [
            'aboutform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/about/update/{id}", name="about_update")
     */
    public function update(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $about = $em->getRepository(About::class)->find($id);

        $form = $this->createForm(AboutChangeFormType::class, $about);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $slugify = new Slugify();
            $slug = $slugify->slugify($form->get('title')->getData());
            $about->setSlug($slug);
            $em->flush();

            $this->addFlash('about_update', "Sayfa İçeriği Düzenlendi <i class='fas fa-pencil-alt'></i>");
            return $this->redirectToRoute('about_home');
        }

        return $this->render('admin/about/update.html.twig', [
            'aboutform' => $form->createView()
        ]);
    }
}
