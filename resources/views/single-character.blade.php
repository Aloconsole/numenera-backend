@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>{{ $character->name }}</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <p> A {{ $character->descriptor->name }} who {{ $character->focus->name }}</p>
        </div>
    </div>
</div>

@endsection