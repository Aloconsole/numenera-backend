@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Campagne</h1>
    </div>
    <div class="row">
        @foreach ($campaigns as $campaign)
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h2>{{ $campaign->title }} </h2>
                        <div class="card-description">
                            @forelse ($campaign->characters as $character)
                                {{ $character->name }}
                            @empty
                                <p>Nessun personaggio attivo per questa campagna.</p>
                            @endforelse
                        </div>
                    </div>
                </div>    
                        {{-- <a href="{{ route('campaign.view', $campaign) }}"></a> --}}
            </div>
        @endforeach
    </div>
</div>

@endsection