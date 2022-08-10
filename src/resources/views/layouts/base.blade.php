<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="{{ '/js/app.js' }}"></script>
    <title>Leo</title>
</head>
<body>
    <header>
        <div class="header">
            <div class='logo'>
                <a href="/">Leo/-</a>
            </div>
            <nav class='navigate'>
                <ul class='menu'>
                    <li><a class='menu_item' href="/solution">Solution</a></li>
                    <li><a class='menu_item' href="/products">Products</a></li>
                    <li><a class='menu_item' href="/portfolio">Portfolio</a></li>
                    <li><a class='menu_item' href="/contact">Contact</a></li>
                </ul>
            </nav>
            <div class="burger_menu">
                <span></span>
            </div>
        </div>
        <div class='slider'>
            <div class="arrow_left">
                <img class="arr_l" src="/img/arrow_left.png" alt="arrow">
            </div>
            <div class='slider_img'>
                <img src="img/coffe.png" alt="coffe">
            </div>
            <div class='slider_text'>
                <h2 class='sld_title'>Introducing</h2>
                <span class='sld_text'>Something hot...</span>
                <button class='sld_btn'><a href="#">Try Demo</a></button>
            </div>
            <div class="arrow_right">
                <img class="arr_r" src="/img/arrow_right.png" alt="arrow">
            </div>
        </div>
    </header>

    @yield('content')
    
    <footer>
        <div class="form_wrap">
            <div class="login_form">
                <form>
                    <h5 class="form_title">Member login</h5>
                    <div class="form">
                        <input type="text" name="User name" placeholder="User name">
                        <input type="text" name="Password" placeholder="Password">
                        <button>Log me in.</button>
                    </div>
                </form>
            </div>
            <div class="subs_form">
                <form>
                    <h5 class="form_title">Subscribe to our weekly newsletter</h5>
                    <input type="text" name="email adress" placeholder="email adress">
                    <button>Subscribe</button> 
                </form>
            </div>
        </div>
        <div class="footer">
            <div class="foo">
                <div class="foo_menu">
                    <h5>About Us</h5>
                    <menu>
                        <ul>
                            <li><a class="foo_menu_item">About us</a></li>
                            <li><a class="foo_menu_item">Why us</a></li>
                            <li><a class="foo_menu_item">Customer Stories</a></li>
                            <li><a class="foo_menu_item">Press Resources</a></li>
                            <li><a class="foo_menu_item">Press Realeses</a></li>
                            <li><a class="foo_menu_item">Contact us</a></li>
                        </ul>
                    </menu>
                </div>
                <div class="foo_menu">
                    <h5>About Us</h5>
                    <menu>
                        <ul>
                            <li><a class="foo_menu_item">About us</a></li>
                            <li><a class="foo_menu_item">Why us</a></li>
                            <li><a class="foo_menu_item">Customer Stories</a></li>
                            <li><a class="foo_menu_item">Press Resources</a></li>
                            <li><a class="foo_menu_item">Press Realeses</a></li>
                            <li><a class="foo_menu_item">Contact us</a></li>
                        </ul>
                    </menu>
                </div>
                <div class="testimonials">
                    <h5>Testimonials</h5>
                    <p class="testi_text">Lorem Ipsum is simply dummy text of the printing and 
                    typesetting industry. Lorem Ipsum has been the industr
                    standard dummy text ever since the 1500s, 
                    when an unknown printer took a </p>
                    <span class="testi_text">Lorem Ipsum is simply</span><br>
                    <span class="testi_text">Owner, Lorem Ipsum</span>
                </div>
                <div class='foo_logo'>
                    <a href="/">Leo/-</a>
                    <span class="copy">© cssauthor.com</span>
                </div>
            </div>
        </div>
    </footer>