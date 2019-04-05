<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/", name="add")
     */
    public function add()
    {
        return $this->render('add/index.html.twig');
    }
}
