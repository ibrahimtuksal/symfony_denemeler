<?php

namespace App\Controller\Admin;

use App\Entity\Banner;
use App\Form\BannerChangeFormType;
use App\Form\BannerFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class BannerController extends AbstractController
{
    /**
     * @Route("/admin/banner", name="banner_home")
     */
    public function index(): Response
    {
        $em = $this->getDoctrine()->getManager();

        $banner = $em->getRepository(Banner::class)->findAll();

        return $this->render('admin/banner/index.html.twig', [
            'banner' => $banner
        ]);
    }

    /**
     * @Route("/admin/banner/create", name="banner_create")
     */
    public function create(Request $request, SluggerInterface $slugger)
    {
        $em = $this->getDoctrine()->getManager();

        $banner = new Banner();

        $form = $this->createForm(BannerFormType::class, $banner);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){
            $brochureFile  = $form->get('photo')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

                $banner->setPhoto("uploads/brochures/".$newFilename);
            }
            $control = $form->get('path')->getData();
            if ($control == "yok" || null || "")
            {
                $banner->setPath("yok");
            }
            $em->persist($banner);
            $em->flush();

            return $this->redirectToRoute('banner_home');
        }

        return $this->render('admin/banner/create.html.twig', [
            'bannerform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/banner/update/{id}", name="banner_update")
     */
    public function update(Request $request, $id, SluggerInterface $slugger)
    {
        $em = $this->getDoctrine()->getManager();

        $banner = $em->getRepository(Banner::class)->find($id);
        $lastPhoto = $banner->getPhoto();
        $form = $this->createForm(BannerChangeFormType::class, $banner);
        $form->handleRequest($request);
        if ( $form->isSubmitted() && $form->isValid() ){

            $brochureFile  = $form->get('photo')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {

                }

                $banner->setPhoto("uploads/brochures/".$newFilename);
            }
            else{
                $banner->setPhoto($lastPhoto);
            }

            $control = $form->get('path')->getData();
            if ($control == "yok" || null || "")
            {
                $banner->setPath("yok");
            }

            $em->flush();
            $this->addFlash('banner_update', "Banner Başarıyla Güncellendi <i class='fas fa-pencil-alt'></i>");
            return $this->redirectToRoute('banner_home');
        }
        return $this->render('admin/banner/update.html.twig', [
            'bannerform' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/banner/remove/{id}", name="banner_delete")
     */
    public function delete($id)
    {
        $em = $this->getDoctrine()->getManager();

        $banner = $em->getRepository(Banner::class)->find($id);

        $lastPhoto = $banner->getPhoto();
        $filesystem = new Filesystem();
        $filesystem->remove($lastPhoto);
        $em->remove($banner);
        $em->flush();

        return $this->redirectToRoute('banner_home');
    }

}
