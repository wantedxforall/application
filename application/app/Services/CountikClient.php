<?php

namespace App\Services;

use App\Lib\CurlRequest;

class CountikClient
{
    public function fetchFollowerCount(string $username): int
    {
        $url = 'https://countik.com/' . ltrim($username, '@');
        $html = CurlRequest::curlContent($url);
        if (!$html) {
            return 0;
        }

        if (preg_match('/followers?[^0-9]*([0-9,.]+)/i', $html, $matches)) {
            return (int) str_replace([',', '.'], '', $matches[1]);
        }

        return 0;
    }
}
