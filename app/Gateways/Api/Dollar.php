<?php

namespace App\Gateways\Api;

use Illuminate\Support\Facades\Http;

class Dollar
{
    private string $url;

    public function __construct()
    {
        $this->url = 'https://economia.awesomeapi.com.br/last/USD-BRL';
    }

    public function getPrice(): float
    {
        return Http::get($this->url)
            ->json()
            ['USDBRL']
            ['ask'];
    }
}
