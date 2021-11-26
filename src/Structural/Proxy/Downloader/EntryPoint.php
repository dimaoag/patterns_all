<?php

declare(strict_types=1);

namespace App\Structural\Proxy\Downloader;

class EntryPoint
{
    public function run(): void
    {
        $url = 'http://example.com/';

        $realSubject = new SimpleDownloader();
        $realSubject->download($url);
        $realSubject->download($url);
        echo "\n";

        echo "Executing the same client code with a proxy:\n";
        $proxy = new CachingDownloader($realSubject);
        $proxy->download($url);
        $proxy->download($url);
    }
}
