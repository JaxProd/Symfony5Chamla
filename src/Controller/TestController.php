<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dump("ça fonctionne");
    }

    /**
     * @Route("/test/{age<\d+>?0}", nmae="test", methodes={"GET","POST"},host="localhost", shemes={"http","https"})
     */
    public function test(Request $request, $age)
    {
        return new Response("Vous avez $age ans");
    }
}
