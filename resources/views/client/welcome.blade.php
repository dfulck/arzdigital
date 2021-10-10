<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arz Digital</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<?php
$User=auth()->user()
?>
<body class="antialiased">
<a href="{{route('users.index')}}">login</a>
@auth
<form action="{{route('users.logout')}}" method="post">
    @csrf
    <input type="submit" value="logout">
</form>
@else
<a href="{{route('users.register')}}">Registry</a>
    @endauth
</body>
@include('client.layout.notification')
</html>
