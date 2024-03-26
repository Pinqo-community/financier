<?php

namespace App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExpenseController extends AbstractController
{
	#[Route('/expense', name: 'create_expense')]
	public function __invoke(Request $request): Response {
		return new Response();
	}
}
