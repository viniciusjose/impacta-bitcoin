<h1>Valor da moeda {{ $quotation->currency }} abaixo de R$ 130,000.00<h1>
<ul>
    <li>Nome: <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded" height="25" /> {{ $quotation->currency }}</li>
    <li>Data: {{ $quotation->created_at->format('d/m/Y H:i:s') }}</li>
    <li>Preço em Dólar: {{ $quotation->amount }}</li>
    <li>Preço em Real: {{ number_format($quotation->converted_amount, 2, ',', '.') }}</li>
</ul><br>
Atenciosamente,<br>
{{ config('app.name') }}