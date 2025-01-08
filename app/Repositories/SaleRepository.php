<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Sale;
use Exception;
use Illuminate\Database\QueryException;

class SaleRepository
{
    public static function all()
    {
        return Sale::all();
    }

    public static function get($fields)
    {
        return Sale::get($fields);
    }

    public static function destroy(Sale $sale)
    {
        $sale->delete();
    }
}
