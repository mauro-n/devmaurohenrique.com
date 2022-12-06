@section('nav')
<nav class="navbar navbar-expand-lg bg-light" id="navbarwrp">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Mauro Henrique</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active px-1 text-center" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active px-1 text-center" href="/portfolio">Portfolio</a>
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
@endsection