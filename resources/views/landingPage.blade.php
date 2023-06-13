<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas SIP Ragil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        h1,
        h2 {
            font-weight: bold;
        }

        .btn-get-started {
            font-weight: bold;
            font-size: 1.2rem;
        }

        .icon-box {
            text-align: center;
        }

        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        /* Updated background color */
        body {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"></ul>
                <ul class="navbar-nav mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="btn btn-light mt-auto me-1" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mt-auto" href="{{ url('register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BODY -->
    <div class="container">
        <section id="hero" class="d-flex align-items-center justify-content-center min-vh-100">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h1>feafeafgeagaea</h1>
                        <h2>wafeafeafea</h2>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#about" class="btn btn-primary btn-get-started scrollto">Get Started</a>
                </div>
                <h1>    </h1>
                <h1>    </h1>
                <div class="row icon-boxes">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="200">
                            <img src="image1.jpg" class="card-img-top" alt="Image 1">
                            <div class="card-body">
                                <div class="icon-box">
                                    <h4 class="title">Lorem Ipsum</h4>
                                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                        molestias excepturi</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="300">
                            <img src="image2.jpg" class="card-img-top" alt="Image 2">
                            <div class="card-body">
                                <div class="icon-box">
                                    <h4 class="title">Sed ut perspiciatis</h4>
                                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="400">
                            <img src="image3.jpg" class="card-img-top" alt="Image 3">
                            <div class="card-body">
                                <div class="icon-box">
                                    <h4 class="title">Magni Dolores</h4>
                                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card" data-aos="zoom-in" data-aos-delay="500">
                            <img src="image4.jpg" class="card-img-top" alt="Image 4">
                            <div class="card-body">
                                <div class="icon-box">
                                    <h4 class="title">Nemo Enim</h4>
                                    <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
    </div>

    <!-- FOOTER -->
    @include ('layouts.include.footer')

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
