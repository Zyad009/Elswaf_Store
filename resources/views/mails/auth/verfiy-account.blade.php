<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OTP Verification</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 30px;">
    <table width="100%"
        style="max-width: 600px; margin: auto; background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 30px;">
        <tr>
            <td style="text-align: center;">
                <h2 style="color: #333;">OTP Verification Code</h2>
                <p style="font-size: 16px; color: #555;">
                    Thank you for registering on our platform. Please use the following code to verify your account:
                </p>
                <div style="margin: 20px 0;">
                    <span style="font-size: 32px; letter-spacing: 8px; color: #000; font-weight: bold;">
                        {{ $otp }}
                    </span>
                </div>
                <p style="font-size: 14px; color: #888;">
                    This code is valid for {{ $expireTime }} minutes only.
                </p>
                <p style="font-size: 14px; color: #999;">
                    If you did not request this code, please ignore this message.
                </p>
            </td>
        </tr>
    </table>
</body>

</html>