<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GreenspaceController extends AbstractController
{
    /**
     * @Route("/api/greenspace", name="greenspace")
     */
    public function index()
    {
        return $this->render('greenspace/index.html.twig', [
            'controller_name' => 'GreenspaceController',
        ]);
    }
}
