<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\Vacancies;

class EntryPoint
{
    public function run(): void
    {
        $site = new VacancyRepository();
        $subscriber = new Subscriber('John');
        $subscriber1 = new Subscriber('Alex');
        $site->addSubscriber($subscriber);
        $site->addSubscriber($subscriber1);

        $site->addVacancy(new Vacancy('Java developer'));
        $site->addVacancy(new Vacancy('Python developer'));
        $site->addVacancy(new Vacancy('JavaScript developer'));
    }
}
