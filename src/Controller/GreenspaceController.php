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
     * @Rest\Get("/greenspace", name="greenspace_api", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function getAll()
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findall();
	return $this->handleView($this->view($greenspace));
    }

    /**
     * @Rest\Get("/greenspace/{id<\d+>}", name="greenspace_api_by_id", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function get($id)
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findOneby(['nsq_espace_vert' => $id]);
	if (!isset($greenspace) || empty($greenspace))
		return $this->handleView($this->view([], Response::HTTP_NOT_FOUND));
	return $this->handleView($this->view($greenspace));
    }

     /**
     * @Rest\Post("/greenspace/create", name="greenspace_api_create", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function create(Request $request)
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = new Greenspace();
	$methods = get_class_methods($greenspace);
	$properties = array();
	foreach ($methods as $method_name)
	{
		if (strncmp($method_name, "set", 3) === 0)
		{
			$property_name = substr($method_name, 3, strlen($method_name) - 3);
			$property_len = strlen($property_name);
			$i = 1;
			while ($i < $property_len)
			{
				if (ctype_upper($property_name[$i]))
					$property_name = substr_replace($property_name, "_", $i++, 0);
				$i++;
			}
			$property_name = strtolower($property_name);
			if ($request->query->has($property_name))
				$greenspace->$method_name($request->query->get($property_name));
		}
	}
	// Need to call a validator here.	
	// $repository->persist($greenspace);
	// $repository->flush($greenspace);
	return $this->handleView($this->view($greenspace, Response::HTTP_CREATED));
    } 

     /**
     * @Rest\Delete("/greenspace/delete/{:id<\d+>}", name="greenspace_api_delete", requirements={"_format"="json"})
     *
     * @return Response
     */
    public function delete($id)
    {
	$repository = $this->getDoctrine()->getRepository(Greenspace::class);
	$greenspace = $repository->findOneby(['nsq_espace_vert' => $id]);
	if ($greenspace)
		$repository->delete($greenspace);
	return $this->handleView($this->view([], Response::HTTP_NO_CONTENT));
    } 
}
