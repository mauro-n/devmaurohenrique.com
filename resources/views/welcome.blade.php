<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dev Mauro Henrique</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/normalize.css">
    </link> <!-- normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css -->
    <link rel="stylesheet" href="/css/style.css">
    </link> <!-- normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        #first-row {
            height: 100%;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <style>
        @media (max-width: 991px) {
            #navbarSupportedContent li a {
                border: 1px solid rgba(128, 128, 128, 0.13);
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg bg-light" id="navbarwrp">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Mauro Henrique</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active px-1 text-center" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active px-1 text-center" href="/projects">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active px-1 text-center" href="/aboutme">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active px-1 text-center" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="first-row">
        <div class="row">
            <div class="col-12">
                <section class="container text-center">
                    <div class="display-6">Hi! i'm</div>
                    <div class="display-2 mb-2">Mauro Henrique</div>
                    <div class="display-6">Front-end Developer</div>
                </section>
                <section class="container mt-5 text-center">
                    <button class="btn btn-outline-primary"> View<br>Portfolio<br></button>
                    <button class="btn btn-primary"> Download<br>Resume</button>
                </section>
            </div>
            <div class="col-12">
                <section class="container text-center mt-5">
                    <div class="display-5">About me</div>
                    <div class="lead mt-3">Hello, i'm a front-end developer from Fortaleza, Brazil currently
                        studying System's Analysis and Development.
                    </div>
                </section>
                <hr class="mt-5 mb-4">
                <section class="container mb-5 d-none d-md-block">
                    <button id="scroll-btn" onclick="scrollerDown()" class="scroll-container">
                        <div class="field">
                            <div class="scroll"></div>
                        </div>
                    </button>
                </section>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-2 text-center">
            <div class="col-md-6">
                <div class="display-6">Overall View</div>
                <img src="/images/eu.png" class="img-fluid mt-5 mb-4 bg-warning rounded-5" style="width: 250px"
                    alt="eu-aqui">
                <div class="display-6">Experience with:</div>
                <div class="row m-2 justify-content-center">
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">JAVASCRIPT</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">PYTHON</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">NODE</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">EXPRESS</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">DJANGO</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">MONGO DB</span>
                    <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">BOOTSTRAP</span>
                </div>
            </div>
            <hr class="d-md-none">
            <div class="col-md-6">
                <section>
                    <div class="display-6 mt-4 mt-md-0">Let's work togheter!</div>
                    <div class="lead d-block mt-3">Where you can find me:</div>
                    <ul class="wrapper mt-5">
                        <li class="icon twitter">
                            <span class="tooltip">LinkedIn</span>
                            <span><i class="fab fa-twitter"></i></span>
                            <img src="images/linkedin-app-icon.png" class="icon" alt="">
                        </li>
                        <li class="icon github">
                            <span class="tooltip">Github</span>
                            <span><i class="fab fa-github"></i></span>
                            <img src="images/github-icon.png" class="icon" alt="">
                        </li>
                    </ul>
                </section>
                <hr>
                <section class="container text-center">
                    <div class="display-6 mb-5">Thank you!</div>
                    <p class="text-md-start">Welcome and thank you for visiting my page!<br>Today i work at a
                        office,
                        administrating a big local store,
                        but i've always been fascinated with technology and programing,
                        and that is what i do on my free time, i code!<br>
                        I'm currently looking for an oportunity to transition carreer,
                        feel free to contact me also at: <a href="">mauro.henrique613@gmail.com</a>
                    </p>
                    <p class="text-start">Also, please check out my <a href="">Portfolio!</a></p>
                    <p>Have a nice day :)</p>
                    <button class="btn btn-outline-secondary mt-2" onclick="scrollerTop()">Back to the top</button>
                </section>
            </div>
        </div>
        <hr>
    </div>
</body>
<section>
    <div class="container-fluid bg-danger text-light text-center">
        <div>this page is a work in progress, some functionalities may be unavailable</div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="/js/script.js"></script>

</html>