<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hóa đơn</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .text-right {
            text-align: right;
        }

        .text-primary {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Code order #{{ $order->code_order }}</h1>
        <p><strong>Name:</strong> {{ $order->user->name }}</p>
        <p><strong>Table:</strong> {{ $order->table->number }}</p>

        <table class="table">
            <thead>
                <tr>
                    <th>Food's name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->dishes as $dish)
                    <tr>
                        <td>{{ $dish->name }}</td>
                        <td>{{ $dish->pivot->quantity }}</td>
                        <td>{{ number_format($dish->price, 0, ',', '.') }} d</td>
                        <td>{{ number_format($dish->price * $dish->pivot->quantity, 0, ',', '.') }} d</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-right">
            <p><strong>Total:</strong> {{ number_format($totalAmount, 0, ',', '.') }} d</p>
        </div>
    </div>
</body>

</html>
