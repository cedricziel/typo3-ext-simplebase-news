<?php

namespace CedricZiel\SimplebaseNews\Controller;

use CedricZiel\Simplebase\Framework\Controller\AbstractController;
use CedricZiel\SimplebaseNews\Entity\News;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Simple News controller
 *
 * @package CedricZiel\SimplebaseNews\Controller
 */
class NewsController extends AbstractController
{
    /**
     * Default action.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        /** @var EntityManagerInterface $em */
        $em = $this->get('entity_manager');
        $repository = $em->getRepository(News::class);

        $news = $repository->findAll();

        return new Response($this->render('@SimplebaseNews/News/index.html.twig', [
            'news' => $news,
        ]));
    }

    /**
     * Show action.
     *
     * @param Request $request
     * @param int $news
     *
     * @return Response
     */
    public function showAction(Request $request, $news = null)
    {
        /** @var EntityManagerInterface $em */
        $em = $this->get('entity_manager');
        $repository = $em->getRepository(News::class);

        $news = $repository->find($news);

        return new Response($this->render('@SimplebaseNews/News/index.html.twig', [
            'news' => $news,
        ]));
    }
}
