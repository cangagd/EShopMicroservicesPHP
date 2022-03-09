<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends AbstractController 
{
    #[Route('/login_check', name: 'api_login_check', methods: ['POST'])]
    public function login() {}
}