<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

    public function index()
    {
       dd("sa fontionne");
   
    }
    /**
     * @Route("/test/{age<\d+>?9}", name="test", methods={"GET","POST"}, schemes={"http", "https"})
     */

    public function test(Request $request, $age)
    {
    //    $request = Request::createFromGlobals();
       //dump($request);
       //la ligne ci-dessous je l'appelerai directement en parametre de la metjode!! une vraie dingurie 
       //$age= $request->attributes->get('age');
       return new Response("vous avez $age ans");
    }
  
    
}