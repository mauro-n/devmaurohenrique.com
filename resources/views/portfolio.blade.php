@extends('layout.main')
@section('title', 'Portfolio')

@section('content')
<div class="container">
    <h1>My projects: </h1>
    <div class="row">
        <div class="col-lg-7 mt-5">
            <div class="card text-center m-4 mt-1">
                <span class="card-header d-flex justify-content-between">
                    <h5 class="d-inline-block m-0">#1 Calculator</h5>
                    <span class="d-inline-block">
                        <span class="badge bg-success">js</span>
                        <span class="badge bg-success">html</span>
                        <span class="badge bg-success">css</span>
                    </span>
                </span>
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="card-text lead my-auto">
                        <span>A simple calculator</span>
                    </p>

                    <a href="#" class="btn btn-primary me-0 d-inline-block">Visit</a>
                </div>
            </div>
            <div class="card text-center m-4 mt-1">
                <span class="card-header d-flex justify-content-between">
                    <h5 class="d-inline-block m-0">#1 Calculator</h5>
                    <span class="d-inline-block">
                        <span class="badge bg-success">js</span>
                        <span class="badge bg-success">html</span>
                        <span class="badge bg-success">css</span>
                    </span>
                </span>
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="card-text lead my-auto">
                        <span>A simple calculator</span>
                    </p>

                    <a href="#" class="btn btn-primary me-0 d-inline-block">Visit</a>
                </div>
            </div>
            <div class="card text-center m-4 mt-1">
                <span class="card-header d-flex justify-content-between">
                    <h5 class="d-inline-block m-0">#1 Calculator</h5>
                    <span class="d-inline-block">
                        <span class="badge bg-success">js</span>
                        <span class="badge bg-success">html</span>
                        <span class="badge bg-success">css</span>
                    </span>
                </span>
                <div class="card-body d-flex align-items-center justify-content-between">
                    <p class="card-text lead my-auto">
                        <span>A simple calculator</span>
                    </p>

                    <a href="#" class="btn btn-primary me-0 d-inline-block">Visit</a>
                </div>
            </div>
            <div class="container d-flex justify-content-center mb-4">
                <button class="badge bg-light text-dark mx-1">Back</button>
                <button class="badge bg-light text-dark mx-1">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection