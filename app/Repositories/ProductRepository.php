<?php

namespace App\Repositories;

use App\Models\Product;
use Exception;
use Illuminate\Database\QueryException;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class ProductRepository
{
    public static function all($name = null)
    {
        $query = Product::query(); // Crea la consulta base

        if ($name) {
            $query->where('name', 'like', "%$name%");
        }

        return $query->select(
            'barcode as Codigo de barras',
            'name as Nombre',
            'sell_price as Precio de venta',
            'buy_cost as Costo de compra',
            'stock as Disponibles',
            'created_at as Fecha de creación',
            'updated_at as Última modificación'
        )->paginate(10);
    }

    public static function find($barcode)
    {
        return Product::where('barcode', $barcode)
            ->first();
    }


    public static function store($fields)
    {
        try {
            Product::create($fields);
        } catch (QueryException $e) {
            return 'No se pudo registrar';
        } catch (Exception $e) {
            return 'Ocurrió un error inesperado';
        }

        return 'Registro exitoso';
    }

    public static function search($name)
    {
        return Product::where('name', 'like', "%$name%")
            ->paginate(10, [
                'id',
                'name',
                'sell_price',
                'stock',
                'image',
                'description',
                'barcode',
                'updated_at'
            ]);
    }
    public static function destroy(Product $product)
    {
        $product->delete();
    }

    public static function getMonthTop()
    {
        return Product::with('sales.tickets')
            ->select('products.*', DB::raw('SUM(sales.quantity) as total_quantity'))
            ->join('sales', 'products.id', '=', 'sales.product_id')
            ->join('tickets', 'sales.ticket_id', '=', 'tickets.id')
            ->where('tickets.created_at', '>=', Carbon::now()->startOfMonth())
            ->where('tickets.created_at', '<=', Carbon::now()->endOfMonth())
            ->groupBy('products.id')
            ->orderBy('total_quantity', 'desc')
            ->take(5)
            ->get();
    }
}
