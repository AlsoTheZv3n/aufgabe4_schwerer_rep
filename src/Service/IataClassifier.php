<?php

namespace App\Service;

class IataClassifier {

    public function classifier(float $length, float $width, float $height): float{


        $result = $length * $width * $height;

        $resultInKg = $result / 6000;

        $resultRounded = round($resultInKg, 2);

        return $resultRounded;

    }
}
