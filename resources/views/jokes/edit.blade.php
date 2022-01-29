@extends('layouts.main')

@section('main-content')
<section class="edit-joke container">
    <form action="{{ route('jokes.update', $joke->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title" class="mb-1">Title</label>
        <input type="text" id="title" name="title" class="form-control mb-3" value="{{ $joke->title }}">

        <label for="body" class="mb-1">Body</label>
        <textarea id="body" name="body" class="form-control mb-3">{{ $joke->body }}</textarea>

        <label for="author" class="mb-1">Author</label>
        <input type="text" id="author" name="author" class="form-control mb-3" value="{{ $joke->author }}">

        <label for="category" class="mb-1">Category</label>
        <input type="text" id="category" name="category" class="form-control mb-3" value="{{ $joke->category }}">

        <button type="submit" class="btn btn-warning">
            Update Joke
        </button>
    </form>
</section>
@endsection