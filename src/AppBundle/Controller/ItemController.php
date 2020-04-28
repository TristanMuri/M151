<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends Controller
{
    public function indexAction(Request $request)
    {
        //Comment
        return new \Symfony\Component\HttpFoundation\Response("Hello World");
    }
    /**
     * @Route("/list")
     */
    public function listaction(Request $request) {
        //Comment
        return $this->render("list.html.php");
    }

}
