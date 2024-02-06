<?php

namespace App\Controller\Weekday;

use App\Service\WeekdayRetriever;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/weekday/{date}', name: 'weekday_index')]

class Index extends AbstractController {

    public function __construct(
        private readonly WeekdayRetriever $weekdayRetriever,
    ) {
    }

    public function __invoke(string $date): Response {

        $date = $this->weekdayRetriever->weekDayExtractor($date);

        return $this->render('weekday/index.html.twig', [
            'date' => $date,

        ]);

    }

}
