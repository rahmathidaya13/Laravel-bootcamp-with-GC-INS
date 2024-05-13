<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="container">
            <h1>Selamat Datang </h1>
            <p>Terima Kasih Telah bergabung bersama Garuda Cyber Institute </p>
            <a href="{{ route('home') }}">Kembali</a>
        </div>
    </body>
</html>
