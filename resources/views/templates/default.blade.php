<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog - @yield('title')</title>
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<header class="menu">
    <div class="container">
        <div class="header clearfix">
            <h1 class="menu_title">Blog - Laravel</h1>
            <nav class="menu_option">
                <ul class="nav nav-pills">
                    <li role="presentation"><a href="/">Home</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

    @yield('container')

<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/assets/js/bootstrap.js"></script>
</body>
</html>