<?php

declare(strict_types=1);

namespace App\Behavioral\State\Transformer\State;

interface State
{
    public function action(): void;
}
