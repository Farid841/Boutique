<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        dd("ça fonctionne très bien");
    }

    /**
     * @Route( "/test/{age<\d+>?0}", name="test", methods={"GEST","POST"}, host="localhost", schemes={"http","https"})
     */

    public function test(Request $request, $age)
    {
        dump($request);

        return new Response("Vous avez $age ans");
    }
}
