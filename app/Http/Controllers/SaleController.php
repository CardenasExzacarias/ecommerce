<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Repositories\SaleRepository;

class SaleController extends Controller
{
    public function index()
    {
        $sales = SaleRepository::all();

        return view('sales.index', compact('sales'));
    }

    public function show(Sale $sale)
    {
        return view('sales.show', compact('sale'));
    }

    public function destroy(Sale $sale)
    {
        SaleRepository::destroy($sale);
        return to_route('sale.index')->with('status', 'Venta Eliminada!');
    }
}
