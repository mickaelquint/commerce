<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UseController extends AbstractController
{
    /**
     * @Route("/use", name="use")
     */
    public function index()
    {
        return $this->render('use/index.html.twig', [
            'controller_name' => 'UseController',
        ]);
    }
}
