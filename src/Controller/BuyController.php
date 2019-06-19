<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BuyController extends AbstractController
{
	/**
	 * @Route ("/buy")
	 */
	public function form()
	{
		$number = random_int(0,100);
		return $this->render('buy/form.html.twig', [
			'number' => $number 
		]);
	}
}
