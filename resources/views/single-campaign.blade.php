@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1> {{ $campaign->title }} </h1>
    </div>
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Party</h2>
                        <div class="card-description">
                            <div class="card-party d-flex flex-column">
                                @forelse ($campaign->characters as $character)
                                   <span class="character"> {{ $character->name }} </span>
                                @empty
                                    <p>Nessun personaggio attivo per questa campagna.</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="card-text">
                            {{ $campaign->desc }}
                        </div>
                    </div>
                </div>  
                        {{-- <a href="{{ route('campaign.view', $campaign) }}"></a> --}}
            </div>
    </div>
</div>

@endsection