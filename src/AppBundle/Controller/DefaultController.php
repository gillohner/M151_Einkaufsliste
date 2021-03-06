<?php
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
    * @Route("/")
    */
    public function indexAction(Request $request)
    {
        return new \Symfony\Component\HttpFoundation\Response("Hello World");
    }

    /**
     * @Route("/bye")
     */
    public function byeAction(Request $request) {
        return new \Symfony\Component\HttpFoundation\Response("Bye World");
    }
}
