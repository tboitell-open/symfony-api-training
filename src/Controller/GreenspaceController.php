<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use App\Entity\Greenspace;

/**
 * Greenspace controller.
 * @Route("/api", name="api_")
 */
class GreenspaceController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/greenspace/{id<\d+>}", name="greenspace_api_by_id", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function getGreenspace($id)
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findOneby(['nsq_espace_vert' => $id]);
	return $this->handleView($this->view($greenspace));
    }

     /**
     * @Rest\Get("/greenspace", name="greenspace_api", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function getAllGreenspace()
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findall();
	return $this->handleView($this->view($greenspace));
    }
}
