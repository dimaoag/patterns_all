<?php

declare(strict_types=1);

namespace App\Behavioral\State\Transformer;

use App\Behavioral\State\Transformer\Context\Transformer;
use App\Behavioral\State\Transformer\State\FireState;
use App\Behavioral\State\Transformer\State\MoveState;

class EntryPoint
{
    public function run(): void
    {
        $transformer = new Transformer();
        $moveState = new MoveState();
        $fireState = new FireState();

        $transformer->setState($moveState);
        $transformer->action(); // move

        $transformer->setState($fireState);
        $transformer->action(); // fire
    }
}
