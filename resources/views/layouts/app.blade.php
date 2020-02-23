<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/app.css">

    <!--fonts.google.com-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:400,900&display=swap" rel="stylesheet">
    <!-- google Material Icons -->
    <!-- https://material.io/resources/icons/?style=baseline -->
    <!-- https://google.github.io/material-design-icons/ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    @yield('head')
</head>
<body>
    @include('inc.nav')
    @yield('content')
</body>
</html>