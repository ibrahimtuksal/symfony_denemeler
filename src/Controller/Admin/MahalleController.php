<?php

namespace App\Controller\Admin;

use App\Entity\Mahalle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MahalleController extends AbstractController
{
    /**
     * @Route("/admin/mahalle", name="mahalle_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Mahalle::class);
        $mahalle = $repository->findAll();
        return $this->render('admin/mahalle/index.html.twig', [
           'mahalleler'=>$mahalle
        ]);
    }
}
