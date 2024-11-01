<!DOCTYPE html>
<html>
<head>
    <title>Laporan Menu, Pelanggan, dan Pesanan</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Laporan Menu</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Menu</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Ketersediaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $menu)
                <tr>
                    <td>{{ $menu->id }}</td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->category }}</td>
                    <td>{{ $menu->price }}</td>
                    <td>{{ $menu->availability ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Laporan Pelanggan</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Nomor Meja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->table_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h1>Laporan Pesanan</h1>
    <table>
        <thead>
            <tr>
                <th>ID Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Nama Menu</th>
                <th>Jumlah</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->order_id }}</td>
                    <td>{{ $order->customer_name }}</td>
                    <td>{{ $order->menu_name }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
