@extends('layouts.main')

@section('main-content')
<section class="joke-details container">
    <div class="back-button d-flex justify-content-end">
        <a href="{{ route('jokes.index') }}" class="btn btn-info fs-6 mb-4 px-4 py-1">Back to jokes</a>
    </div>
    <h1 class="text-uppercase mb-2">{{ $joke->title }}</h1>
    <div class="badge bg-primary mb-5">{{ $joke->category }}</div>
    <p class="mb-5">{{ $joke->body }}</p>
    <span>Author: <strong>{{ $joke->author }}</strong></span>
    <div class="likes text-secondary mb-5">
        <i class="fas fa-heart"></i>
        {{ $joke->likes }}
    </div>
    <div class="actions d-flex justify-content-center">
        <a href="{{ route('jokes.edit', $joke->id) }}" class="btn btn-warning me-4 px-4 py-1">Edit</a>
        <a href="" class="btn btn-danger px-4 py-1">Delete</a>
    </div>
</section>
@endsection