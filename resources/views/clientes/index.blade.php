<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>email</th>
            <th>teléfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->email }}</td>
                <td>{{ $cliente->telefono }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
