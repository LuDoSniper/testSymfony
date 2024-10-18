<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route('/', 'app_home')]
    public function home(): Response
    {
        return new Response('Salut !');
    }
}