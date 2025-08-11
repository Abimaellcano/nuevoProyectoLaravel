<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>Cliente ID</th>
            <th>Fecha Pedido</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->cliente_id }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->total }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
