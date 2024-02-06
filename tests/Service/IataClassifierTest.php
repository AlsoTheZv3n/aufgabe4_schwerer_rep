<?php


namespace App\Tests\Service;

use App\Service\IataClassifier;
use PHPUnit\Framework\TestCase;

class IataClassifierTest extends TestCase {

    public function testClassifier(): void {

        $iataClassifier = new IataClassifier();

        $length = 24;
        $width = 24;
        $height = 24;

        $expected = $length * $width * $height / 6000;

        $expectedRounded = round($expected, 2);


        $result = $iataClassifier->classifier($length, $width, $height);

        $resultRounded = round($result, 2);

        $this->assertEquals($expectedRounded, $resultRounded);

    }
}
