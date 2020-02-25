@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                @if(session()->get('success'))
                    <div class="alert alert-success">
                      {{ session()->get('success') }}  
                    </div><br />
                  @endif
                  <table class="table">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tema</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">URL</th>
                          <th colspan="2">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($agendas as $agenda)
                        <tr>
                          <th scope="row">{{ $agenda->id }}</th>
                          <td>{{ $agenda->nombre }}</td>
                          <td>{{ $agenda->fecha }}</td>
                          <td><a href="{{ $agenda->url }}">{{ $agenda->url }}</a></td>
                          <td><a href="{{ route('agenda.edit', $agenda->id)}}" class="btn btn-primary">Editar</a></td>
                          <td>
                                <form action="{{ route('agenda.destroy', $agenda->id)}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>
                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <a href="{{route('agenda.create')}}" class="btn btn-primary" role="button">Nuevo Registro</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
