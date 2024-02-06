<?php


namespace App\Controller\Iata;

//length, width und height

use App\Service\IataClassifier;
use App\Service\WeekdayRetriever;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/iata/length/{length}/width/{width}/height/{height}', name: 'iata_index')]
class Index extends AbstractController {

    public function __construct(
        private readonly IataClassifier $iataClassifier,
    ) {
    }

    public function __invoke(float $length, float $width, float $height): Response {

        $result = $this->iataClassifier->classifier($length, $width, $height);


        return $this->render('iata/index.html.twig', [
            'result' => $result,
        ]);
    }

}


