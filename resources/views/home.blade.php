@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-end">
        <div class="col-md-5">
            <p>Tus puntos Son:</p>
            <div class="card">
                <div class="card-header"><strong>Tabla de resultados</strong></div>
                <div class="card-body">
                    <div class="text-center">
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
