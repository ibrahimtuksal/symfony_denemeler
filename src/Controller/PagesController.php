<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Hizmetler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/about/{slug}", name="about_page")
     */
    public function about($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $about = $em->getRepository(About::class)->findOneBy(['slug' => $slug]);

        return $this->render('pages/about.html.twig', [
            'about' => $about
        ]);
    }
}
