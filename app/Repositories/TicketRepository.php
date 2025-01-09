<?php

namespace App\Repositories;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketRepository
{
    public static function all()
    {
        return Ticket::all();
    }

    public static function find($folio)
    {
        return Ticket::where('folio', $folio)
            ->first();
    }

    public static function store($products)
    {
        dd($products);
        return 'hola';
    }

    public static function getSales(Ticket $ticket)
    {
        $sales = DB::table('sales as s')
            ->join('products as p', 'p.id', '=', 's.product_id')
            ->where('s.ticket_id', $ticket->id)
            ->get([
                'name',
                'quantity',
                'sell_price',
                's.id as sale',
                'p.id as product',
            ]);

        return $sales;
    }

    public static function destroy($folio)
    {
        $ticket = static::find($folio);
        $ticket->delete();
    }
}
