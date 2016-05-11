<?php

namespace CedricZiel\SimplebaseNews\Controller;

use CedricZiel\Simplebase\Framework\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends AbstractController
{
    public function indexAction()
    {
        return new Response('Buh!');
    }
}
