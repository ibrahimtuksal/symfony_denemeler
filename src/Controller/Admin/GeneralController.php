<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    #[Route('/admin/general', name: 'admin_general')]
    public function index(): Response
    {
        return $this->render('admin/general/index.html.twig', [
            'controller_name' => 'GeneralController',
        ]);
    }
}
