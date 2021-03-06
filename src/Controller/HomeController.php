<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Banner;
use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\General;
use App\Entity\GeneralInformation;
use App\Entity\Hizmetler;
use App\Entity\Number;
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

        $content = $em->getRepository(Content::class)->findBy([],['id' => 'asc'], 6);


        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        return $this->render('home/index.html.twig', [
            'banners' => $banner,
            'numberSolo' => $numberSoloList,
            'generals' => $generalInformation,
            'hizmetler' => $hizmetler,
            'contents' => $content,
        ]);
    }

    public function header()
    {
        $em = $this->getDoctrine()->getManager();

        $hizmetler = $em->getRepository(Hizmetler::class)->findAll();
        $about = $em->getRepository(About::class)->findAll();
        $bolgeler = $em->getRepository(Bolgeler::class)->findAll();
        $general = $em->getRepository(General::class)->find(1);

        return $this->render('home/inc/header.html.twig',[
            'hizmetlerHeader' => $hizmetler,
            'about' => $about,
            'bolgelerHeader' => $bolgeler,
            'generals' => $general
        ]);
    }

}
