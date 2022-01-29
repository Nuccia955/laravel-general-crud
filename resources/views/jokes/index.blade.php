@extends('layouts.main')

@section('main-content')
    <section class="jokes-collection container">
        <ul class="list-group list-group-flush">
            @forelse ($jokes as $joke)
                <li class="list-group-item d-flex justify-content-between">
                    <h4>{{ $joke->title }}</h4>
                    <a href="{{ route('jokes.show', $joke->id) }}" class="btn btn-info">Show details</a>
                </li>
            @empty
                <span class="fs-3">There's no joke yet! :(</span>
            @endforelse
        </ul>
    </section>
@endsection