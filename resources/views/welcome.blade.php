<!DOCTYPE html>
<html lang="en">
<head>
    <title>Projeto: Engenharia de Dados com Biticoin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    .menu-do-corpo,
    th {
        height: 30px;
        color: #ffffff !important;
        background-color: #006eab !important;
        padding: 5px 5px;
    }

    .menu-do-corpo-login {
        height: 30px;
        color: #ffffff !important;
        background-color: #006eab !important;
        padding: 0px 10px;
    }

    .th-l {
        border-radius: 5px 0 0 0;
    }
    .th-r {
        border-radius: 0 5px 0 0;
    }
    .info-menu-do-corpo {
        height: 70px;
        color: #ffffff;
        background-color: #aaa !important;
        padding: 10px;
    }
    .painel-central {
        height: 490px;
        background: #ffffff url("{{ asset('images/fundo.jpg') }}") no-repeat center top;
        background-size: 100%;
    }
    .menu-topo {
        /*background-color: rgba(0, 110, 171, 1) !important;  Vermelho com 50% de opacidade */
        background: linear-gradient(#006eab, black);
    }
    .conteudo-centro {
        height: 606px;
        background-color: #aaa;
    }
    .conteudo-centro-login {
        height: 324px;
        background-color: #aaa;
    }
    .rodape {
        margin-top: 25rem !important;
        height: 50px;
        background-color: #006eab !important;
        text-align: center;
    }
    .rodape-login {
        height: 50px;
        background-color: #006eab !important;
        text-align: center;
    }
    .btn-btc {
        --bs-btn-color: #ffffff;
        --bs-btn-bg: #e88021;
        --bs-btn-border-color: #e88021;
        --bs-btn-hover-color: #ffffff;
        --bs-btn-hover-bg: #e88021;
        --bs-btn-hover-border-color: #e88021;
        --bs-btn-focus-shadow-rgb: 217, 164, 6;
        --bs-btn-active-color: #ffffff;
        --bs-btn-active-bg: #e88021;
        --bs-btn-active-border-color: #e88021;
        --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        --bs-btn-disabled-color: #ffffff;
        --bs-btn-disabled-bg: #e88021;
        --bs-btn-disabled-border-color: #e88021;
    }
    .logo {
        margin-left: 55%;
    }
    .texto-trabalho {
        margin-left: 10%;
        margin-top: -2%;
    }
    .ml {
        margin-left: 10%;
    }

    /*PORTRAIT*/
    @media (max-width: 360px) {
        .conteudo-centro {
            height: 775px;
        }
        .painel-central { background-size: 250%; }

        .nav-link, ul, li {
            display: inline !important;
            padding: 1% 0;
        }
        .rodape {
            margin-top: 35rem !important;
        }
    }
</style>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark menu-topo">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.html">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="rounded logo" height="40" />
                </a>
            </li>
            <li class="nav-item d-none d-sm-block">
            <span class="nav-link text-white texto-trabalho">
              Projeto: Engenharia de Dados com Biticoin
            </span>
            </li>
        </ul>
    </div>
</nav>
<div class="p-5 text-white painel-central position-relative">
    <div class="row">
        <div class="col-md-4">
            <h1>BITICOIN (BTC)</h1>
            <p>Data de atualização {{ $quotations->first()?->created_at->format('d/m/Y H:i:s') ?? '' }}</p>

            <h5>BITCOIN/BRL - Bitcoin Real Brasileiro</h5>
            <p>
                {{ number_format($quotations?->first()->converted_amount ?? 0, 2, ',', '.') }}
            </p>
        </div>
    </div>
    <div
            class="col-md-8 conteudo-centro mx-auto shadow p-3 mb-5 bg-white rounded text-black col-sm-12"
    >
        <div class="row">
            <div class="container mt-3 table-responsive">
                <table class="table table-striped table-sm">
                    <thead class="menu-do-corpo">
                    <tr>
                        <th class="th-l col-sm-4">Nome</th>
                        <th class="th-l col-sm-4">Data</th>
                        <th class="col-sm-2">Preço em Dólar</th>
                        <th class="col-sm-2">Preço em Real</th>
                    </tr>
                    </thead>
                    <tbody class="info-menu-do-corpo">
                        @foreach($quotations as $quotation)
                            <tr>
                                <td class="text-right">
                                    <img
                                            src="{{ asset('images/logo.png') }}"
                                            alt="Logo"
                                            class="rounded"
                                            height="25"
                                    />
                                    {{ $quotation->currency }}
                                </td>
                                <td>{{ $quotation->created_at->format('d/m/Y H:i:s') }}</td>
                                <td>{{ $quotation->amount }}</td>
                                <td>{{ number_format($quotation->converted_amount, 2, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container2">
            <div class="row">
                <div class="col-md-12 col-sm-12 mt-4 text-sm text-left text-wrap">
                    <h2>Sobre o Biticoin</h2>
                    <h5>BITICOIN (BTC)</h5>
                    <p class="">
                        Bitcoin é uma criptomoeda descentralizada e de código aberto, um
                        dinheiro eletrônico para transações financeiras ponto a ponto
                        (sem intermediários), originalmente descrita em um artigo por um
                        programador ou grupo de programadores sob o pseudônimo Satoshi
                        Nakamoto, publicado em 31 de outubro de 2008 na lista de
                        discussão The Cryptography Mailing. Bitcoin é considerada a
                        primeira moeda digital mundial descentralizada,constituindo um
                        sistema econômico alternativo, e responsável pelo ressurgimento
                        do sistema bancário livre. <br />
                        Veja mais na
                        <a href="https://pt.wikipedia.org/wiki/Bitcoin">Wikipédia</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-5 p-4 text-white rodape position-relative">
    <p>Projeto: Engenharia de Dados com Biticoin</p>
</div>
</body>
</html>
