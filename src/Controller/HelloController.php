<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController
{

    /**
     * @Route("/Hello/{param}", name="Hello", methods={"GET"}, host="localhost", schemes={"http","https"})
     */

    public function hello_word($param = "World", Calculator $calculator, LoggerInterface $Logger, Slugify $slugify, Environment $twig)
    {
        dump($twig);

        dump($slugify->slugify("Hello Word"));

        $Logger->error("mon message de log !");

        $tva = $calculator->calcul(100);
        dump($tva);


        return new Response("Hello $param");
    }
}
