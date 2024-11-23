<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f7f7f7; margin: 0; padding: 20px;">
    <table style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <tr>
            <td>
                <h2 style="color: #333; text-align: center;">New Contact Form Submission</h2>
                <p style="color: #555; font-size: 16px; line-height: 1.6;">
                    <strong>Name:</strong> {{ $details['name'] }}
                </p>
                <p style="color: #555; font-size: 16px; line-height: 1.6;">
                    <strong>Email:</strong> {{ $details['email'] }}
                </p>
                <p style="color: #555; font-size: 16px; line-height: 1.6;">
                    <strong>Message:</strong>
                </p>
                <p style="color: #555; font-size: 16px; line-height: 1.6; margin-top: 10px;">
                    {{ $details['note'] }}
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
