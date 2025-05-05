<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Your Order Invoice</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            background: #ffffff;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2,
        h3 {
            color: #007bff;
            margin-bottom: 10px;
        }

        p {
            margin: 6px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f0f0f0;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }

        .section {
            margin-top: 30px;
        }

        /* Responsive styling for mobile */
        @media (max-width: 600px) {
            .container {
                padding: 20px 15px;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th,
            td {
                font-size: 14px;
                padding: 8px;
            }

            h2,
            h3 {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Highlighted message for pending order -->
        <div
            style="background-color: #fff3cd; border: 1px solid #ffeeba; color: #856404; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <strong>⏳ Important Notice:</strong> Your order is currently <strong>under review</strong> and has not yet
            been accepted.
            <br>
            You will receive another email once your order is approved and confirmed.
        </div>

        <h2>Your Order Invoice</h2>
        <p>Thank you for your order! Below are your order details:</p>

        <div class="section">
            <h3>Customer Information</h3>
            <p><strong>Name:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
        </div>

        <div class="section">
            <h3>Delivery Information</h3>
            <p><strong>City:</strong> {{ $order->city }}</p>
            <p><strong>Area:</strong> {{ $order->area }}</p>
            <p><strong>Address:</strong> {{ $order->delivery_address }}</p>
            <p><strong>Delivery Method:</strong> {{ $order->delivery_method }} - {{ $order->delivery_type }}</p>
        </div>

        <div class="section">
            <h3>Products Ordered</h3>
            @if($order->orderDetails && $order->orderDetails->count())
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>QTY</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Final Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->orderDetails as $item)
                        <tr>
                            <td>{{ $item->product_name }}</td>
                            <td>{{ $item->QTY }}</td>
                            <td>{{ $item->color ?? 'N/A' }}</td>
                            <td>{{ $item->size ?? 'N/A' }}</td>
                            <td>{{ number_format($item->price, 2) }} EGP</td>
                            <td>
                                @if($item->discount)
                                {{ $item->discount }}{{ $item->discount_type == 'percent' ? '%' : ' EGP' }}
                                @else
                                0
                                @endif
                            </td>
                            <td>{{ number_format($item->final_price, 2) }} EGP</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <p>No products found in this order.</p>
            @endif
        </div>

        <div class="section">
            <h3>Invoice Summary</h3>
            <p><strong>Subtotal:</strong> {{ number_format($order->total, 2) }} EGP</p>
            <p><strong>Delivery Price:</strong> {{ number_format($order->delivery_price, 2) }} EGP</p>
            <p><strong>Final Total:</strong> {{ number_format($order->finally_total, 2) }} EGP</p>
            <p><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
            <p><strong>Order Date:</strong> {{ $order->order_date }}</p>
        </div>

        <div class="footer">
            <p>Thanks for shopping with us!<br>ElsWaf Store</p>
        </div>
    </div>
</body>

</html>