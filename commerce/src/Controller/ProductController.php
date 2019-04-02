<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends AbstractController
{

    /**
     * @Route("/", name="product_home")
     */
    public function index(Request $request ){
        $getParameters = $request->query->all();
        $postParameters = $request->query->all();
    }

}
