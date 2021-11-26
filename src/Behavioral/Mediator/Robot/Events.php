<?php

declare(strict_types=1);

namespace App\Behavioral\Mediator\Robot;

class Events
{
    public const STEP_EXECUTED = 'step execute'; // шаг сделан
    public const ANGEL_CHANGED = 'angel changed'; // угол наклона изменен
    public const STABILIZATION_FINISHED = 'stabilization finished'; // стабилизация завершена
}
