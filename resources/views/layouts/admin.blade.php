<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '管理ページ')</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Hiragino Kaku Gothic ProN", "Yu Gothic", sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            padding: 32px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 1.5rem;
            margin-bottom: 24px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px 12px;
            border-bottom: 1px solid #eee;
            text-align: left;
            vertical-align: top;
        }
        th {
            background-color: #fafafa;
            font-size: 0.875rem;
            color: #666;
        }
        tr.clickable-row {
            cursor: pointer;
        }
        tr.clickable-row:hover {
            background-color: #f0f7ff;
        }
        a {
            color: #1976d2;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .badge {
            display: inline-block;
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 0.8rem;
            color: #fff;
        }
        .badge-new {
            background-color: #d32f2f;
        }
        .badge-in_progress {
            background-color: #f57c00;
        }
        .badge-resolved {
            background-color: #388e3c;
        }
        .detail-row {
            margin-bottom: 16px;
        }
        .detail-row dt {
            font-weight: bold;
            color: #666;
            font-size: 0.875rem;
        }
        .detail-row dd {
            margin: 4px 0 0;
            white-space: pre-wrap;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 16px;
        }
        select {
            padding: 6px 10px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            padding: 6px 16px;
            font-size: 1rem;
            border-radius: 4px;
            border: 1px solid #1976d2;
            background-color: #1976d2;
            color: #fff;
            cursor: pointer;
        }
        .alert {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 10px 16px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .empty {
            color: #999;
            text-align: center;
            padding: 40px 0;
        }
        .pagination {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
