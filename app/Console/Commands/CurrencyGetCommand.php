<?php

namespace App\Console\Commands;

use App\Gateways\Api\Coincap;
use App\Gateways\Api\Dollar;
use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CurrencyGetCommand extends Command
{
    protected $signature = 'currency:get';

    protected $description = 'Consulta a api da coinapi e salva no banco de dados';

    public function handle(): void
    {
        $coincap = (new Coincap())->getBitcoin();
        $dollar = (new Dollar())->getPrice();

        $data = [
            'currency'         => $coincap['data']['symbol'],
            'amount'           => round($coincap['data']['priceUsd'], 2),
            'converted_amount' => round($coincap['data']['priceUsd'] * $dollar, 2),
            'created_at'       => now()->setTimezone('America/Sao_Paulo')->toDateTimeString(),
        ];

        $this->table(['Moeda', 'Valor em Dólar', 'Valor em Real', 'Data da Cotação'], [$data]);

        $quotation = new Quotation();
        $quotation->fill($data);
        $quotation->save();
    }
}
