@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">LISTA DE PUBLICACIONES</div>
                <div class="card-body">
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Locutor</th>
                          <th scope="col">Tema</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">URL</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($agendas as $agenda)
                        <tr>
                          <th scope="row">{{ $agenda->id }}</th>
                          <td>{{ $agenda->user->name }}</td>
                          <td>{{ $agenda->nombre }}</td>
                          <td>{{ $agenda->fecha }}</td>
                          <td><a href="{{ $agenda->url }}">{{ $agenda->url }}</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection