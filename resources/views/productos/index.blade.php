<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>precio</th>
            <th>stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->stock }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
