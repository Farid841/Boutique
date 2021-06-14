<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        dd("ça fonctionne très bien");
    }
    public function test(Request $request, $age)
    {
        dump($request);

        return new Response("Vous avez $age ans");
    }
}
