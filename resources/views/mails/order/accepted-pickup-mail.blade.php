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

        .order-code {
            font-size: 18px;
            font-weight: bold;
            color: #28a745;
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

        <!-- Accepted order message -->
        <div
            style="background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            <strong>✅ Good News!</strong> Your order has been <strong>accepted</strong> and is ready for <strong>pickup
                from the store</strong>.
            <br>
            Please bring your order code and visit the branch to collect your items.
        </div>

        <!-- Order Code Highlight -->
        <div class="order-code" style="margin-bottom: 20px;">
            🧾 Order Code: <span style="color: #dc3545;">{{ $order->pickup_code }}</span>
        </div>

        <h2>Your Order Invoice</h2>
        <p>Thank you for choosing us! Below are the details of your accepted order:</p>

        <div class="section">
            <h3>Customer Information</h3>
            <p><strong>Name:</strong> {{ $order->name }}</p>
            <p><strong>Email:</strong> {{ $order->email }}</p>
            <p><strong>Phone:</strong> {{ $order->phone }}</p>
        </div>

        <div class="section">
            <h3>Pickup Information</h3>
            @if($order->pickupPoint)
            <p><strong>Branch Name:</strong> {{ $order->pickupPoint->name }}</p>
            @else
            <p><strong>Branch Name:</strong>Main Branch</p>
            @endif
            <p><strong>Pickup Type:</strong> In-store Pickup</p>
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
            <p>We look forward to seeing you in our store!<br>ElsWaf Store</p>
        </div>
    </div>
</body>

</html>