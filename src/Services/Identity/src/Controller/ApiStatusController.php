<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ApiStatusController extends AbstractController
{
  #[Route('/status/ping', name: 'api_status_ping', methods: ['GET'])]
  public function ping(): Response
  {
    return $this->json([
      "pinged" => true
    ]);
  }
}
