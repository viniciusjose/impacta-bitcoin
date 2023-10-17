<?php

namespace App\Gateways\Api;

use Illuminate\Support\Facades\Http;

class Coincap
{
    private string $url;

    public function __construct()
    {
        $this->url = 'https://api.coincap.io/v2/';
    }

    public function getBitcoin()
    {
        return Http::get($this->url . 'assets/bitcoin')->json();
    }
}