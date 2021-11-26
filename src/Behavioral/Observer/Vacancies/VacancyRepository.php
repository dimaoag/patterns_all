<?php

declare(strict_types=1);

namespace App\Behavioral\Observer\Vacancies;

class VacancyRepository implements Observed
{
    private array $vacancies;
    private array $subscribers;

    public function addVacancy(Vacancy $vacancy): void
    {
        $this->vacancies[$vacancy->getName()] = $vacancy;
        $this->notifyObservers();
    }

    public function removeVacancy(Vacancy $vacancy): void
    {
        unset($this->vacancies[$vacancy->getName()]);
        $this->notifyObservers();
    }

    public function addSubscriber(Subscriber $subscriber): void
    {
        $this->subscribers[$subscriber->getName()] = $subscriber;
    }

    public function removeSubscriber(Subscriber $subscriber): void
    {
        unset($this->vacancies[$subscriber->getName()]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->handle($this->vacancies);
        }
    }
}
