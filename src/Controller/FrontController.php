<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Services;
use App\Form\ServicesType;
use App\Repository\ServicesRepository;


class FrontController extends AbstractController
{
    #[Route('/service/{slug}', name: 'front_service')]
    public function service(Services $services, ServicesRepository $servicesRepository): Response
    {
        return $this->render('front/service.html.twig', [
            'services' => $servicesRepository->findOneBy(),
        ]);
    }
}
