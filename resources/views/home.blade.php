@extends('layout.main')

@section('title', 'DevMauro - Home')

@section('content')
<div class="container-fluid" id="first-row">
    <div class="row">
        <div class="col-12">
            <section class="container text-center">
                <div class="display-6">Hi! i'm</div>
                <div class="display-2 mb-2">Mauro Henrique</div>
                <div class="display-6">Front-end Developer</div>
            </section>
            <section class="container mt-5 text-center">
                <a href="/portfolio" class="btn btn-outline-primary"> View<br>Portfolio<br></a>
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
            <img src="/images/eu.png" class="img-fluid mt-3 mb-4 rounded-5" style="width: 250px"
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
                <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">PHP</span>
                <span class="col-5 col-sm-3 badge _color-bege border text-dark m-2 p-2">LARAVEL</span>
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
                        <a href='https://www.linkedin.com/in/mauro-henrique-5a2b08b6/'><img src="images/linkedin-app-icon.png" class="icon" alt=""></a>
                    </li>
                    <li class="icon github">
                        <span class="tooltip">Github</span>
                        <span><i class="fab fa-github"></i></span>
                        <a href="https://github.com/mauro-n"><img src="images/github-icon.png" class="icon" alt=""></a>                        
                    </li>
                </ul>
            </section>
            <hr>
            <section class="container text-center">
                <div class="display-6 mb-5">Thank you!</div>
                <p class="text-md-start">Welcome and thank you for visiting my page!<br>
                    I've algit status
                    ways been fascinated with technology and programing,
                    and that is what i do, i code!<br>
                    Feel free to contact me also at: <a href="">mauro.henrique613@gmail.com</a>
                </p>
                <p class="text-start">Also, please check out my <a href="/portfolio">Portfolio!</a></p>
                <p>Have a nice day :)</p>
                <button class="btn btn-outline-secondary mt-2" onclick="scrollerTop()">Back to the top</button>
            </section>
        </div>
    </div>
    <hr>
</div>
@endsection