<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}" />
</head>

<body>
    <nav class="mb-70 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logos/shopease.svg') }}" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Testimonials</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="header mb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="jumbo-header mb-30">
                        Cari Produk Cepat<br>
                        Nyaman & Murmer
                    </h1>
                    <p class="paragraph mb-30">
                        Lorem house ipsum could be a reall good home<br>
                        without thinking si amet dolor safety around.
                    </p>
                    <p class="mb-50"><a href="#" class="btn btn-primary">Explore Houses</a></p>
                    <div class="row stats text-center">
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                23,491
                            </h3>
                            <p class="paragraph">
                                Koskosan
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                983
                            </h3>
                            <p class="paragraph">
                                Awards
                            </p>
                        </div>
                        <div class="col-lg-4 item">
                            <h3 class="big-header">
                                182M+
                            </h3>
                            <p class="paragraph">
                                Happy People
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/landing/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="best-items">
        <div class="container">
            <div class="row text-center mb-50">
                <div class="col-lg-12">
                    <img src="images/ic_best.svg" height="42" alt="" class="mb-16">
                    <h3 class="big-header">
                        Best of The Best
                    </h3>
                    <p class="paragraph">
                        Dolor space comfortable moments
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/iphone1.jpg') }}" alt="" class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row rounded">

                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/mac1.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/key1.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/monitor1.jpg') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/house5.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/house6.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/house7.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('assets/images/landing/house8.png') }}" alt=""
                                class="img-fluid">
                        </a>
                        <div class="info">
                            <a href="">
                                <h3 class="small-header mb-2">
                                    Coral Brown
                                </h3>
                            </a>
                            <div class="footer">
                                <div class="location d-flex flex-row ">
                                    <img src="{{ asset('assets/images/landing/ic_loc.svg') }}" height="20"
                                        alt="">
                                    <p class="small-paragraph mb-0">
                                        Exnoparty
                                    </p>
                                </div>
                                <div class="price">
                                    <p class="mb-0">
                                        $28,109<span class="extra-small-paragraph">/mo</span>
                                    </p>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
