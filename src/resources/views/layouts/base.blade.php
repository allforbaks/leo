<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <title>Leo</title>
</head>
<body>
    <header>
        <div class='logo'>
            <a href="/">Leo/-</a>
        </div>
        <div class='navigate'>
            <ul class='menu'>
                <li class='menu_item'><a href="/solution">Solution</a></li>
                <li class='menu_item'><a href="/products">Products</a></li>
                <li class='menu_item'><a href="/portfolio">Portfolio</a></li>
                <li class='menu_item'><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </header>
    <div class='slider'>
        <div class='slider_img'>
            <img src="img/coffe.pngg" alt="head_bg">
        </div>
        <div class='slider_text'>
            <h2 class='slider_title'></h2>
        </div>
    </div>
    @yield('content')
    <footer>

    </footer>