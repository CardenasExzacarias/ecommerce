<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Ticket;
use Error;
use Exception;
use Illuminate\Support\Facades\DB;

class TicketRepository
{
    public static function all()
    {
        return Ticket::select(
            'folio as Folio',
            'created_at as Fecha de creación',
            'updated_at as Última modificación'
        )->paginate(10);
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
            $key = str_replace('q:', '', $name);

            $formatedProducts[$key] = $count;
        }

        $products = $formatedProducts;

        $productsBarcode = array_keys($products);

        $productsData = Product::where(function ($query) use ($productsBarcode) {
            foreach ($productsBarcode as $barcode) {
                $query->orWhere('barcode', 'like', "%$barcode%");
            }
        })
            ->get([
                'id',
                'sell_price',
                'buy_cost',
                'name',
                'stock',
                'barcode'
            ]);

        foreach ($products as $barcode => $count) {
            $product = $productsData->filter(function ($product) use ($barcode) {
                return $product->barcode == $barcode;
            })->values();

            if (count($product) != 0) {
                $product = $product[0];

                $product->stock -= $count;

                $product->save();

                $sales[] = [
                    'sell_price' => $product->sell_price,
                    'buy_cost' => $product->buy_cost,
                    'quantity' => $count,
                    'product_id' => $product->id,
                    'ticket_id' => $ticket->id
                ];
            }
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
                's.sell_price',
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
