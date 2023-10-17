<?php

namespace App\Http\Controllers;

use App\Gateways\Api\Coincap;
use App\Gateways\Api\Dolar;
use App\Models\Quotation;

class HomeController extends Controller
{
    public function index()
    {
        $quotations = Quotation::orderBy('created_at', 'desc')->get();

        return view('welcome', compact('quotations'));
    }
}
