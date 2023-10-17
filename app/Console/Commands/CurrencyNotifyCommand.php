<?php

namespace App\Console\Commands;

use App\Mail\CurrencyEmailMail;
use App\Models\Quotation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CurrencyNotifyCommand extends Command
{
    protected $signature = 'currency:notify';

    protected $description = 'Notifica por e-mail quando a cotação do bitcoin for menor que R$ 130.000,00';

    public function handle(): void
    {
        Quotation::orderBy('created_at', 'desc')
            ->limit(1)
            ->get()
            ->each(function (Quotation $quotation) {
                if ($quotation->converted_amount < 130000) {
                    $this->info('Cotação abaixo de R$ 130.000,00');
                    $this->info('Enviando e-mail...');

                    $this->sendEmail($quotation);

                    $this->info('E-mail enviado com sucesso!');
                }
            });
    }

    public function sendEmail(Quotation $quotation): void
    {
        Mail::to('vinicius.teste@gmail.com')->send(new CurrencyEmailMail($quotation));
    }
}
