@extends('layout.main')
@section('title', 'Admin')
@section('content')

<div class="container mb-5">
    <h1>Welcome to the rice fields MF</h1>
    <h2 class="mt-3">Add a project, fella</h2>

    <form class="col-lg-4 mt-4" method="POST" action="/portfolio">
        @csrf
        <div class="form-group mb-2">
            <label for="title">Project title:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title for the project">
        </div>
        <div class="form-group mb-1">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Enter a brief description" rows="3"></textarea>
        </div>
        <div class="form-group mb-1">
            <label for="tech">Techs</label>
            <input type="text" class="form-control" id="tech" name="tech" placeholder="Which techs were used?"></input>
        </div>
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="public" name="public" value="1">
            <label class="form-check-label" for="public">Public</label>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection