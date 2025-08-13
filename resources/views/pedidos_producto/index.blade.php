<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>ID Pedido</th>
            <th>Nombre Cliente</th>
            <th>producto_id</th>
            <th>cantidad</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos_producto as $pedido)
            <tr>

                <td>{{ $pedido->pedido_id }}</td>
                <td>{{ $pedido->pedido->cliente->nombre }}</td>
                <td>{{ $pedido->producto->nombre }}</td>
                <td>{{ $pedido->cantidad }}</td>
                <td>{{ $pedido->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
