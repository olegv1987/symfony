<?php

namespace Moc\WeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction($city)
    {

        $json = json_encode(array(
            'city' => $city,
        ));

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;

    }

}
