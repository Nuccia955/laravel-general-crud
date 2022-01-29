{{-- HOMEPAGE --}}
@extends('layouts.main')

@section('main-content')
    <section class="container welcome">
        <h1 class="text-center mb-4">
            Welcome in jokes DB
        </h1>
        <p class="text-center mb-4">Hey, need some fun? Visit our jokes collection, or if you want, write us a new joke to make our readers have fuuun!</p>
        <div class="action d-flex justify-content-center">
            <a href="" class="btn btn-primary me-3 px-4 py-1">Add a new Joke</a>
            <a href="" class="btn btn-warning px-4 py-1">Go to Jokes</a>
        </div>
    </section>
@endsection