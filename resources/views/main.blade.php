{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>@yield('title')</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<ul>--}}
{{--    <li><a href="/">Home</a></li>--}}
{{--    <li><a href="/show">Show</a></li>--}}
{{--    <li><a href="/Service">Service</a></li>--}}
{{--</ul>--}}

{{--@yield('content')--}}

{{--<h2>footer</h2>--}}
{{--</body>--}}
{{--</html>--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tooplate's Little Fashion</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="css/slick.css"/>

    <link href="css/tooplate-little-fashion.css" rel="stylesheet">
    <!--

    Tooplate 2127 Little Fashion

    https://www.tooplate.com/view/2127-little-fashion

    -->
</head>

<body>

<section class="preloader">
    <div class="spinner">
        <span class="sk-inner-circle"></span>
    </div>
</section>

<main>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="/">
                <strong><span>Little</span> Fashion</strong>
            </a>

            <div class="d-lg-none">
                <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

                <a href="product-detail.html" class="bi-bag custom-icon"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/story">Story</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/products">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>

                <div class="d-none d-lg-block">
                    <a href="/admin" class="bi-person custom-icon me-3"></a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

</main>


<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-10 me-auto mb-4">
                <h4 class="text-white mb-3"><a href="index.html">Little</a> Fashion</h4>
                <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
                <br>
                <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
            </div>

            <div class="col-lg-5 col-8">
                <h5 class="text-white mb-3">Sitemap</h5>

                <ul class="footer-menu d-flex flex-wrap">
                    <li class="footer-menu-item"><a href="story" class="footer-menu-link">Story</a></li>

                    <li class="footer-menu-item"><a href="products" class="footer-menu-link">Products</a></li>
                    <li class="footer-menu-item"><a href="faq" class="footer-menu-link">FAQs</a></li>

                    <li class="footer-menu-item"><a href="contact" class="footer-menu-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-4">
                <h5 class="text-white mb-3">Social</h5>

                <ul class="social-icon">

                    <li><a href="#" class="social-icon-link bi-youtube"></a></li>

                    <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                    <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                    <li><a href="#" class="social-icon-link bi-skype"></a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/Headroom.js"></script>
<script src="js/jQuery.headroom.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
