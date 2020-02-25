@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agendar Evento</div>
                <div class="card-body">
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div><br />
                  @endif
                    <form method="post" action="{{ route('agenda.store') }}">
                        <div class="form-group">
                            @csrf
                            <label for="nombre">Tema:</label>
                            <input type="text" class="form-control" name="nombre"/>
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha :</label>
                            <input type="text" class="form-control" name="fecha" value="2020-02-25 03:12:04" />
                        </div>
                        <div class="form-group">
                            <label for="url">URL :</label>
                            <input type="text" class="form-control" name="url"/>
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar Evento</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
