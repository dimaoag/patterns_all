<?php

declare(strict_types=1);

namespace App\Structural\Bridge\Formatters;

use App\Structural\Bridge\Formatters\Abstraction\HelloWorldService;
use App\Structural\Bridge\Formatters\Implementation\HtmlFormatter;
use App\Structural\Bridge\Formatters\Implementation\PlainTextFormatter;

class EntryPoint
{
    public function run(): void
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        echo 'Hello World: ' . $service->get();

        $service->setImplementation(new HtmlFormatter());
        echo '<p>Hello World</p>' . $service->get();
    }
}
