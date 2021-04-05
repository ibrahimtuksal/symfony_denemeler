<?php

namespace App\Controller;

use App\Entity\Hizmetler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $hizmetler = $em->getRepository(Hizmetler::class)->findAll();

        return $this->render('home/index.html.twig', [
            'hizmetler' => $hizmetler
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="hizmet")
     */
    public function hizmet($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $hizmetler = $em->getRepository(Hizmetler::class)->findOneBy(['slug' => $slug]);

        return $this->render('pages/hizmet.html.twig', [
            'hizmetler' => $hizmetler
        ]);
    }
}
