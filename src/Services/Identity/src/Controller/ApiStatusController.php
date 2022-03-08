<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ApiStatusController extends AbstractController
{
  #[Route('/api/status/ping', name: 'api_status_ping', methods: ['GET'])]
  public function ping(): Response
  {
    $response = new JsonResponse();
    $response->headers->set('Content-Type', 'application/json');
    $response->setData([
      "pinged" => true
    ]);

    return $response;
  }
}
