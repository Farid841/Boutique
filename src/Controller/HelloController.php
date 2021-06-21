<?php

namespace App\Controller;

use Symfony\Component\DependencyInjection\Loader\ProtectedPhpFileLoader;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    protected $twig;
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    /**
     * @Route("/Hello/{prenom}", name="Hello", methods={"GET"}, host="localhost", schemes={"http","https"})
     */

    public function hello_word($prenom = "World")
    {
        $html = $this->twig->render("hello.html.twig", [
            'prenom' => $prenom,
        ]);
        return new Response($html);
    }




    /**
     * @Route("/example", name="example")
     */
    public function example()
    {
        return $this->render();
    }

    protected function render()
    {
        $html = $this->twig->render("example.html.twig", [
            'age' => 22
        ]);
        return new Response($html);
    }
}
