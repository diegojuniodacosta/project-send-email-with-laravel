@extends('layouts.template')

@section('content')

<div style="position: relative; text-align: center; margin-top: 20px">
    <h1 style="font-size: 50px; margin: 0;">
        Felício Transportes
    </h1>
    <div style="position: absolute; right: 0; top: 50%; transform: translateY(-50%);">
        <button class="btn btn-success" style="padding: 0; margin-right: -100px; border: none;">
            <a href="{{ route('transports.create') }}"
               style="display: inline-block; padding: 10px 20px;
            color: inherit; text-decoration: none;">
                Agendar
            </a>
        </button>
    </div>
</div>

    <div style="text-align: center; margin-top: 20px">
        <img src="{{ asset('images/meios-transporte.jpeg') }}" alt="" style="height: 300px; width: 550px">
        <img src="{{ asset('images/transportes.jpeg') }}" alt="" style="height: 300px; width: 550px">
    </div>

@endsection
