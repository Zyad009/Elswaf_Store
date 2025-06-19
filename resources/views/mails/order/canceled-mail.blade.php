<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Order Cancelled - We're Sorry</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fdf2f2;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            background: #fff;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #dc3545;
        }

        .cancel-box {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px 15px;
            }

            h2 {
                font-size: 20px;
            }

            p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- Canceled order notification -->
        <div class="cancel-box">
            <strong>⚠️ We’re sorry!</strong> Unfortunately, your order has been <strong>cancelled</strong>.
        </div>

        <h2>Order Cancellation</h2>
        <p>Dear {{ $order->name }},</p>

        <p>We regret to inform you that your order <strong>#{{ $order->follow_up_code }}</strong> could not be accepted.</p>

        <p><strong>Reason for Cancellation:</strong></p>
        <p style="color:#dc3545;"><em>{{ $order->cancel_reason }}</em></p>

        <p>We sincerely apologize for any inconvenience this may have caused. If you believe this was an error or have
            any questions, please don’t hesitate to reach out to our support team.</p>

        <p>We appreciate your understanding and hope to serve you again soon under better circumstances.</p>

        <div class="footer">
            <p>Thank you,<br>ElsWaf Store Team</p>
        </div>
    </div>
</body>

</html>