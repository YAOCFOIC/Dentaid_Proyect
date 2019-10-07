@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">  
            <div class="col-md-6">
                <div class="justify-content-init">
                    <div class="col-md-12">
                        <div class="embed-responsive embed-responsive-16by9">
                          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
          </div>
      <div class="col-md-5">
        <p>Tus puntos Son:</p>
        <div class="card">
            <div class="card-header"><strong>Tabla de Rangos</strong></div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead class="thead-dark">
                        <th>Nombre</th>
                        <th>Puntos</th>
                    </thead>
                    <tbody>
                        <td></td>
                        <td></td>
                    </tbody>
                </table>
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

@endsection
