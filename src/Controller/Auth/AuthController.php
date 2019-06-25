<?php

namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;


class AuthController extends AbstractController
{
	/**
	 * @Route("/auth/register", name="register", methods={"POST"}, requirements={"_format"="json"})
	 */
	public function register(Request $request, UserPasswordEncoderInterface $encoder)
	{
		$entity_manager = $this->getDoctrine()->getManager();
		$username = $request->request->get('_username');
		$password = $request->request->get('_password');
		$user = new User($username);
		$user->setPassword($encoder->encodePassword($user, $password));
		$entity_manager->persist($user);
		$entity_manager->flush();
		return new JsonResponse(["message" => "User sucessfully created !"], 200, []);
	}
}
