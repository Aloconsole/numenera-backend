@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">Dashboard Numenera</div>

                <div class="card-body">
                    <h5>Ciao {{auth()->user()->name}}</h5>
                    <p class="m-0">Questa è la tua dashboard da {{ auth()->user()->role }}.</p>
                    <p class="">Seleziona una sezione per iniziare.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection