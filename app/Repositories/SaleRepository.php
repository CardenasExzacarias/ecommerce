<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

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

    public static function getMonthlySales()
    {
        $currentYear = Carbon::now()->year;
        $lastYear = $currentYear - 1;

        return Sale::with('tickets')
            ->select(
                DB::raw('strftime("%Y-%m", tickets.created_at) as year_month'),
                DB::raw('SUM(sales.sell_price * sales.quantity) as total_sales'),
                DB::raw('SUM(sales.buy_cost * sales.quantity) as total_cost')
            )
            ->join('tickets', 'sales.ticket_id', '=', 'tickets.id')
            ->whereYear('tickets.created_at', $currentYear)
            ->orWhereYear('tickets.created_at', $lastYear)
            ->groupBy(DB::raw('strftime("%Y-%m", tickets.created_at)'))
            ->orderBy('year_month', 'desc')
            ->get();
    }
}
