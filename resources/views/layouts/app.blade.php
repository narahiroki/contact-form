<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'お問い合わせフォーム')</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background: #fff;
            padding: 32px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 24px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        .error {
            color: #d32f2f;
            font-size: 0.875rem;
            margin-top: 4px;
        }
        .actions {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 24px;
        }
        button {
            padding: 10px 24px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #1976d2;
            cursor: pointer;
        }
        button[type="submit"] {
            background-color: #1976d2;
            color: #fff;
        }
        button.secondary {
            background-color: #fff;
            color: #1976d2;
        }
        .confirm-row {
            margin-bottom: 16px;
        }
        .confirm-row dt {
            font-weight: bold;
            color: #666;
            font-size: 0.875rem;
        }
        .confirm-row dd {
            margin: 4px 0 0;
            white-space: pre-wrap;
        }
        .message {
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
