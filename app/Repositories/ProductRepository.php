<?php

namespace App\Repositories;

use App\Models\Product;
use Exception;
use Illuminate\Database\QueryException;

class ProductRepository
{
    public static function all($name = null)
{
    $query = Product::query(); // Crea la consulta base

    if ($name) {
        $query->where('name', 'like', "%$name%"); // Aplica el filtro si hay un nombre
    }

    return $query->select(
        'id',
        'name',
        'barcode',
        'sell_price',
        'buy_cost',
        'stock',
        'image',
        'description',
        'created_at',
        'updated_at'
    )->paginate(10); // Pagina los resultados filtrados
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
}
