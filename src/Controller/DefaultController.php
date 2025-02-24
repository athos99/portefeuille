<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends BaseController
{
    #[Route('/',name: 'index' )]
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }
}
