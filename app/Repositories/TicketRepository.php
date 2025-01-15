<?php

namespace App\Repositories;

use App\Models\Sale;
use App\Models\Ticket;
use Error;
use Exception;
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
        $ticket = Ticket::create([
            'folio' => rand(100000000, 999999999)
        ]);

        $formatedProducts = [];

        foreach ($products as $name => $count) {

            $key = str_replace('_', ' ', $name);

            $formatedProducts[$key] = $count;
        }

        $products = $formatedProducts;

        $productsName = array_keys($products);

        $productsData = DB::table('products as p')
            ->where(function ($query) use ($productsName) {
                foreach ($productsName as $name) {
                    $query->orWhere('name', 'like', "%$name%");
                }
            })
            ->get([
                'id',
                'sell_price',
                'name'
            ])->toArray();

        foreach ($products as $name => $count) {
            $productData = array_values(array_filter(
                $productsData,
                function ($data) use ($name) {
                    return $data->name === $name;
                }
            ));

            if (!empty($productData)) {
                $productData = $productData[0];
            }

            $sales[] = [
                'sell_price' => $productData->sell_price,
                'quantity' => $count,
                'product_id' => $productData->id,
                'ticket_id' => $ticket->id
            ];
        }

        Sale::insert($sales);

        return 'Venta realizada con éxito';
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
