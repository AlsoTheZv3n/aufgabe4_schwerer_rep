<?php


namespace App\Tests\Service;

use App\Service\WeekdayRetriever;
use PHPUnit\Framework\TestCase;

class WeekdayRetriverTest extends TestCase {

    public function testWeekdayRetriver(): void {

        $weekDayRetriver = new WeekdayRetriever();

        $this->assertIsString('Mi', $weekDayRetriver->weekDayExtractor('2022-02-02'));

        $this->assertIsString('Mo', $weekDayRetriver->weekDayExtractor('2023-08-07'));

        $this->assertIsString('Di', $weekDayRetriver->weekDayExtractor('2021-03-21'));
    }
}
