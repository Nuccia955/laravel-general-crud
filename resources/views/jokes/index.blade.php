@extends('layouts.main')

@section('main-content')
    <section class="jokes-collection container">
        <ul class="list-group list-group-flush">
            @forelse ($jokes as $joke)
                <li class="list-group-item">
                    <h4>{{ $joke->title }}</h4>
                </li>
            @empty
                <span class="fs-3">There's no joke yet! :(</span>
            @endforelse
        </ul>
    </section>
@endsection