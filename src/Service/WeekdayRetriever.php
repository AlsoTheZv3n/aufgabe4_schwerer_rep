<?php


namespace App\Service;


use DateTimeImmutable;

class WeekdayRetriever {

    public function weekDayExtractor(string $date): string {


        $date = DateTimeImmutable::createFromFormat('Y-m-d', $date)->format('D');


        return $date;
    }

}
