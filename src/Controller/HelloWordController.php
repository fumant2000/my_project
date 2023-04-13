<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWordController {
     /**
     * @Route("/hello/{msg?Lior}", name="hello", methods={"GET","POST"}, schemes={"http", "https"})
     */

    public function hello(Request $request, $msg)
    {
       return new Response("hello, salut ✌😎" . $msg);
   
    }
  
    
}