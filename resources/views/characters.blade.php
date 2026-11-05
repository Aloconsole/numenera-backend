@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Personaggi</h1>
    </div>
    <div class="row">
        @foreach ($characters as $character)
        <div class="col-md-3 col-sm-12 col-lg-3">
                 <a href="{{ route('character.view', $character) }}">
                    <div class="card">
                        <div class="card-body">
                            <h2>{{ $character->name }}</h2>
                            <h5>{{ $character->type }}</h5>
                            <div class="card-description">
                                <p>
                                    Tier
                                    <span class="char-details"> {{ $character->tier }}</span>
                                </p>
                                <div class="pool">
                                    <p class="m-0">
                                        Might
                                        <span class="char-details"> {{ $character->might_pool }}</span>
                                    </p>
                                    <p class="m-0">
                                        Speed
                                        <span class="char-details"> {{ $character->speed_pool }}</span>
                                    </p>
                                    <p class="m-0">
                                        Intellect
                                        <span class="char-details"> {{ $character->intellect_pool }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>    
                </a>
                        {{-- <a href="{{ route('campaign.view', $campaign) }}"></a> --}}
            </div>
             @endforeach
    </div>
</div>

@endsection