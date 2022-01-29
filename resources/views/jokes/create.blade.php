@extends('layouts.main')

@section('main-content')
<section class="add-new-joke container">
    <form action="{{ route('jokes.store') }}" method="POST">
        @csrf
        <label for="title" class="mb-1">Title</label>
        <input type="text" id="title" name="title" class="form-control mb-3">

        <label for="body" class="mb-1">Body</label>
        <textarea id="body" name="body" class="form-control mb-3"></textarea>

        <label for="author" class="mb-1">Author</label>
        <input type="text" id="author" name="author" class="form-control mb-3">

        <label for="category" class="mb-1">Category</label>
        <input type="text" id="category" name="category" class="form-control mb-3">

        <button type="submit" class="btn btn-success">
            Add Joke
        </button>
    </form>
</section>
@endsection