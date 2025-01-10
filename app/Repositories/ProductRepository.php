<?php

namespace App\Repositories;

use App\Models\Product;
use Exception;
use Illuminate\Database\QueryException;

class ProductRepository
{
    public static function all()
    {
        return  Product::paginate(10);
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
            ->get([
                'id',
                'name',
                'price',
                'stock',
                'image',
                'updated_at'
            ]);
    }
    public static function destroy(Product $product)
    {
        $product->delete();
    }

}
