<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel - Pertemuan 1</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            body {
                margin: 0;
                font-family: 'Figtree', sans-serif;
                background-color: #121212;
                color: #ffffff;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }
            .container {
                text-align: left;
                width: 100%;
                max-width: 400px;
                padding: 20px;
            }
            .name {
                font-size: 24px;
                font-weight: 600;
                margin-bottom: 8px;
                color: #e0e0e0;
            }
            .nim {
                font-size: 18px;
                font-weight: 400;
                color: #9e9e9e;
                margin-bottom: 30px;
            }
            .btn {
                background-color: #eeeeee;
                color: #121212;
                border: none;
                padding: 12px 24px;
                font-size: 18px;
                font-weight: 500;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.2s;
                text-decoration: none;
                display: inline-block;
            }
            .btn:hover {
                background-color: #bdbdbd;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="name">Jihadut Tolibin</div>
            <div class="nim">20230140125</div>
            <a href="#" class="btn">Modul Pertemuan 1</a>
        </div>
    </body>
</html>
