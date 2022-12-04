<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dev Mauro Henrique</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
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
        <nav class="navbar navbar-expand-lg bg-light">
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
        <div class="container-fluid mt-3">
            <div class="row h-100">
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
                    <section class="container mt-5">
                        <button id="scroll-btn" class="scroll-container">
                            <div class="field">
                                <div class="scroll"></div>
                            </div>
                        </button>
                    </section>
                </div>
            </div>
            <hr>
            <div class="row mt-5 text-center">
                <div class="col-md-6">
                    <div class="display-6">Overall View</div>
                    <img src="images/eu.png" class="img-fluid mt-5 mb-4 bg-warning rounded-5" style="width: 250px"
                        alt="img not loading properly">
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
                        <p class="text-md-start">Welcome and thank you for visiting my page!<br>Today i work at a office, administrating a big local store,
                            but i've always been fascinated with technology and programing,
                            and that is what i do on my free time, i code!<br>
                            I'm currently looking for an oportunity to transition carreer,
                            feel free to contact me also at:  <a href="">mauro.henrique613@gmail.com</a>
                        </p>
                        <p class="text-start">Also, please check out my <a href="">Portfolio!</a></p>
                        <p>Have a nice day :)</p>
                        <button class="btn btn-outline-secondary mt-2">Back to the top</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous">
    </script>
</html>
