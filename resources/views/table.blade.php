<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Unit Price</th>
        <th>Quantity</th>
    </tr>
    @foreach ($products as $product):
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['product_name'] }}</td>
            <td>{{ $product['unit_price'] }}</td>
            <td>{{ $product['quantity'] }}</td>
        </tr>
    @endforeach
</table>
