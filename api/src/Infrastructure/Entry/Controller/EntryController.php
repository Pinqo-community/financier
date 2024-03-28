<?php

namespace App\Infrastructure\Entry\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EntryController extends AbstractController
{
  #[Route('/entry', name: 'create_entry')]
  public function __invoke(Request $request): Response
  {
    return new Response();
  }
}
