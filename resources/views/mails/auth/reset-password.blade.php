<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Reset Your Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            background: #ffffff;
            margin: auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin-top: 20px;
            background-color: #007bff;
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
        }

        .footer {
            margin-top: 40px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Reset Your Password</h2>
        <p>Hello,</p>
        <p>You are receiving this email because we received a password reset request for your account.</p>

        <a href="{{ $resetUrl }}" class="btn">Reset Password</a>

        <p>If you did not request a password reset, no further action is required.</p>

        <div class="footer">
            <p>Thanks,<br>Your Website Team</p>
        </div>
    </div>
</body>

</html>