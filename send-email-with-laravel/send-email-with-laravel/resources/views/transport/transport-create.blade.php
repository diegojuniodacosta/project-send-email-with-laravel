
@extends('layouts.template')

@section('content')
    <div class="container">
        <h1 style="text-align: center; margin-top: 10px">
            Agendar Transporte
        </h1>
        <form action="{{ route('transports.store') }}" method="POST" class="transport-form">
            @csrf
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" id="date" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="hour">Hora:</label>
                <input type="time" id="hour" name="hour" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="origen">Origem:</label>
                <input type="text" id="origen" name="origen" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="destiny">Destino:</label>
                <input type="text" id="destiny" name="destiny" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Descrição:</label>
                <input type="text" id="description" name="description" placeholder="Descreva o Serviço" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Confirmar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
            <button class="btn btn-danger">
                <a style="text-decoration: none; color: white" href="{{ route('transports.index') }}">
                    Voltar
                </a>
            </button>
        </form>
    </div>
@endsection
