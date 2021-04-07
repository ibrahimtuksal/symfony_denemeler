<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Banner;
use App\Entity\GeneralInformation;
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

        $banner = $em->getRepository(Banner::class)->findBy([],['desk' => 'asc']);

        $generalInformation = $em->getRepository(GeneralInformation::class)->findBy([],['desk' => 'asc']);



        return $this->render('home/index.html.twig', [
            'banners' => $banner,
            'generals' => $generalInformation,
            'hizmetler' => $hizmetler

        ]);
    }

    public function header()
    {
        $em = $this->getDoctrine()->getManager();

        $hizmetler = $em->getRepository(Hizmetler::class)->findAll();
        $about = $em->getRepository(About::class)->findAll();

        return $this->render('home/inc/header.html.twig',[
            'hizmetlerHeader' => $hizmetler,
            'about' => $about
        ]);
    }

}
