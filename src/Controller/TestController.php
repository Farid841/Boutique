<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    protected $calculator;
    public function __construct(Calculator $calculator)
    {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/", name="index")
     */

    public function index()
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);
        dd("ça fonctionne très bien");
    }

    /**
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET","POST"}, host="localhost", schemes={"http","https"})
     */

    public function test(Request $request, $age)
    {
        $tva = $this->calculator->calcul(100);
        dump($tva);
        return new Response("Vous avez $age ans");
    }
}
