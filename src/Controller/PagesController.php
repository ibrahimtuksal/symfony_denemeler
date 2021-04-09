<?php

namespace App\Controller;

use App\Entity\About;
use App\Entity\Bolgeler;
use App\Entity\Content;
use App\Entity\Hizmetler;
use App\Entity\Mahalle;
use App\Entity\Number;
use App\Entity\SSS;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/hizmet/{slug}", name="hizmet_page")
     */
    public function hizmet($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $hizmet = $em->getRepository(Hizmetler::class)->findOneBy(['slug' => $slug]);
        $hizmetNotIn = $em->getRepository(Hizmetler::class)->findOneBySomeField([$hizmet->getId()]);

        $contentToHizmet = $em->getRepository(Content::class)->findBy(['hizmet' => $hizmet]);
        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        return $this->render('pages/hizmet.html.twig', [
            'hizmet' => $hizmet,
            'hizmetNotIn' => $hizmetNotIn,
            'numberSoloList' => $numberSoloList,
            'contentToHizmet' => $contentToHizmet
        ]);
    }

    /**
     * @Route("/about/{slug}", name="about_page")
     */
    public function about($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $about = $em->getRepository(About::class)->findOneBy(['slug' => $slug]);
        $aboutNotIn = $em->getRepository(About::class)->findOneBySomeField([$about->getId()]);
        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        return $this->render('pages/about.html.twig', [
            'about' => $about,
            'aboutNotIn' => $aboutNotIn,
            'numberSoloList' => $numberSoloList,
        ]);
    }

    /**
     * @Route("/content/{slug}", name="content_page")
     */
    public function content($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $content = $em->getRepository(Content::class)->findOneBy(['slug' => $slug]);

        $contentNotIn = $em->getRepository(Content::class)->findOneBySomeField([$content->getId()]);

        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        return $this->render('pages/content.html.twig', [
            'content' => $content,
            'contentNotIn' => $contentNotIn,
            'numberSoloList' => $numberSoloList,
        ]);
    }

    /**
     * @Route("/bolge/{slug}", name="bolgeler_page")
     */
    public function bolge($slug)
    {
        $em = $this->getDoctrine()->getManager();

        $bolge = $em->getRepository(Bolgeler::class)->findOneBy(['slug' => $slug]);

        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        $mahalle = $em->getRepository(Mahalle::class)->findBy(['semt' => $bolge]);

        return $this->render('pages/bolge.html.twig',[
            'bolgeler' => $bolge,
            'numberSoloList' => $numberSoloList,
            'mahalle' => $mahalle
        ]);
    }

    /**
     * @Route("/sss", name="sss_page")
     */
    public function sss()
    {
        $em = $this->getDoctrine()->getManager();

        $numberSoloList = $em->getRepository(Number::class)->findBy(['is_active' => true],['desk' => 'asc'],1);

        $sss = $em->getRepository(SSS::class)->findAll();
        return $this->render('pages/sss.html.twig', [
            'sss' => $sss,
            'numberSoloList' => $numberSoloList,
        ]);
    }
}
