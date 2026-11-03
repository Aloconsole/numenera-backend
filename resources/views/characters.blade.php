@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Personaggi</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <ul>
                @foreach ($characters as $character)
                    <li>
                        <a href="{{ route('character.view', $character) }}">{{ $character->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection