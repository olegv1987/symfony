<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
//        return $this->render('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));
//        return new Response('<html><body>Hello '.$name.'!</body></html>');
        $content = $this->renderView('AcmeHelloBundle:Default:index.html.twig', array('name' => $name));

        return new Response($content);
    }
}
