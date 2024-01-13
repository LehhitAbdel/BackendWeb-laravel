<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #111827;
            line-height: 1.5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 2rem;
        }
        .header {
            font-size: 24px;
            margin-bottom: 1rem;
        }
        .content {
            margin-bottom: 1rem;
        }
        .footer {
            font-size: 14px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            New Contact Form Submission
        </div>
        <div class="content">
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Message:</strong> {{ $content}}</p>
        </div>
        <div class="footer">
            This email was sent from the website's contact form.
        </div>
    </div>
</body>
</html>
