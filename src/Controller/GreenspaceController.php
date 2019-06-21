<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use FOS\RestBundle\View\View;
use App\Entity\Greenspace;


class GreenspaceController extends AbstractFOSRestController
{
    /**
     * @Route("/", name="greenspace")
     */
    public function index()
    {
        return $this->render('greenspace/index.html.twig', [
            'controller_name' => 'GreenspaceController',
        ]);
    }

    /**
     * @Route("/api/greenspace", name="greensace_api", requirements={"_format"="json"})
     */
    public function getAllGreenspace()
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findall();
	return new Response(json_encode($greenspace]), Response::HTTP_OK, ['Content-type' => 'application/json']);
    }
}
