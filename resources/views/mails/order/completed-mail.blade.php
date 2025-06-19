<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Order Completed - Thank You!</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 700px;
            background: #ffffff;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        h2 {
            color: #007bff;
        }

        p {
            margin: 10px 0;
        }

        .completed-box {
            background-color: #e2f0ff;
            border: 1px solid #b3d7ff;
            color: #004085;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
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

        <!-- Completed order notification -->
        <div class="completed-box">
            <strong>🎉 Great News!</strong> Your order has been <strong>successfully completed</strong>.
            <br>
            We truly hope you enjoyed shopping with us and that your experience was delightful.
        </div>

        <h2>Thank You for Your Order!</h2>
        <p>Dear {{ $order->name }},</p>

        <p>We’re thrilled to let you know that your order has been successfully completed and delivered.</p>

        <p>It’s been a pleasure serving you, and we hope the items you received met your expectations.</p>

        <p>If you have any questions, feedback, or just want to say hello — we’re always here to help!</p>

        <p>Until next time, happy shopping 💚</p>

        <div class="footer">
            <p>With love,<br>ElsWaf Store Team</p>
        </div>
    </div>
</body>

</html>