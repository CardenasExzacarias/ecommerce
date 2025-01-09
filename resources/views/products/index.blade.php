<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .btn {
            display: inline-block;
            padding: 6px 12px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-success {
            background-color: #00a308;
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    @if (session('status'))
    <div class="status">
        {{ session('status') }}
    </div>
@endif
    <button>
        <a href="{{ url('product/'.'create') }}" class="btn">Crear</a>
    </button>

    <h1>Lista de Productos</h1>

    @if($products->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Imagen</th>
                    <th>Ver</th> <!-- Nueva columna para el enlace de "Ver" -->
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->image }}</td>
                        <td>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-success">Ver</a>
                        </td>
                        <td>
                            <a href="{{ url('product/' . $product->id . '/edit') }}" class="btn">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay productos disponibles.</p>
    @endif
</body>
</html>
