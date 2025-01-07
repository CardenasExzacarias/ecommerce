<?php

namespace App\Repositories;

use App\Models\Product;
use Exception;
use Illuminate\Database\QueryException;

class ProductRepository
{
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
}
