@extends('layouts.main')

@section('main-content')
<section class="trash container">
    <div class="back-button d-flex justify-content-end mb-5">
        <a href="{{ route('jokes.index') }}" class="btn btn-info fs-6 px-4 py-1">Back to jokes</a>
    </div>
    <ul class="list-group list-group-flush">
        @forelse ($trashed_jokes as $joke)
            <li class="list-group-item d-flex">
                <div class="col-8 d-flex">
                    <h4 class="me-4"><strong>ID: </strong>{{ $joke->id }} | </h4>
                    <h4>{{ $joke->title }}</h4>
                </div>

                <div class="actions col-4 d-flex justify-content-end">
                    <a href="{{ route('restore', $joke->id) }}" class="btn btn-success me-4">Restore</a>
                    <a href="{{ route('forceDelete', $joke->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want delete this joke?')">Delete</a>
                </div>
            </li>
        @empty
            <span class="fs-3">There's no trashed joke yet!</span>
        @endforelse
    </ul>
</section>
@endsection