<?php

declare(strict_types=1);

namespace App\Structural\Proxy\Downloader;

/**
 * Класс Заместителя – это попытка сделать загрузку более эффективной. Он
 * обёртывает реальный объект загрузчика и делегирует ему первые запросы на
 * скачивание. Затем результат кэшируется, что позволяет последующим вызовам
 * возвращать уже имеющийся файл вместо его повторной загрузки.
 */
class CachingDownloader implements Downloader
{
    private SimpleDownloader $downloader;
    private array $cache = [];

    public function __construct(SimpleDownloader $downloader)
    {
        $this->downloader = $downloader;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo "CacheProxy MISS. ";
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];
    }
}