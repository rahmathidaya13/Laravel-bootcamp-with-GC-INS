<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

    </head>
    <body>
        <div class="container" >
            <h1>Garuda Cyber Institute</h1>
            <h4>Jadilah Programer Handal Bersama GC-INS</h4>
            <p>Grow Together With Garuda Cyber Institute</p>
            <h3>Syarat dan Ketentuan</h3>
            <ul>
                <li>Tamatan SMA/SMK </li>
                <li>Tamatan Perguruan Tinggi </li>
                <li>Pekerja IT </li>
                <li>Freelancer </li>
            </ul>
            <h3>Cara Gabung</h3>
            <ol>
                <li>Kunjungi Website GC-INS</li>
                <li>Register</li>
                <li>Lakukan Pembayaran</li>
            </ol>
            <a href="{{ route('register') }}">Gabung Sekarang</a>
        </div>
    </body>
</html>
