<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #ffffff;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background-color: #F5811E;
            padding: 10px 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
            color: #ffffff;
        }

        .email-body {
            padding: 20px;
        }

        .email-body h2 {
            color: #F5811E;
            margin-bottom: 15px;
        }

        .email-body p {
            margin: 10px 0;
        }

        .email-footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #eeeeee;
            text-align: center;
            color: #777777;
        }

        .email-footer p {
            margin: 5px 0;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>New Contact Form Submission</h1>
        </div>
        <div class="email-body">
            <h2>Contact Details:</h2>
            <p><strong>Name:</strong> {{ $details['name'] }}</p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $details['note'] }}</p>
        </div>
        <div class="email-footer">
            <p>Thank you for reaching out to us!</p>
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
