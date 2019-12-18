@extends('layouts.app')

@section('content')

@if(session('mensaje'))
  <div class="alert alert-success">
    {{session('mensaje')}}
  </div>
@endif
 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Editar Nota</span>
                    <a href="/notas" class="btn btn-primary btn-sm">Volver a lista de notas...</a>
                </div>
                <div class="card-body">     
                  @if ( session('mensaje') )
                    <div class="alert alert-success">{{ session('mensaje') }}</div>
                  @endif
                  <form action="{{route('notas.update',$nota->id)}}" method="POST">
					@method('PUT')
				  @csrf

				  @error('nombre')
				    <div class="alert alert-danger">El Nombre es Obligatorio
				      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				    </div>
				  @enderror

				  @error('descripcion')
				    <div class="alert alert-danger">La Descripcion es Obligatoria
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				    </div>
				  @enderror


                    <input
                      type="text"
                      name="nombre"
                      placeholder="Nombre"
                      class="form-control mb-2"
                      value="{{$nota->nombre}}"
                    />
                    <input
                      type="text"
                      name="descripcion"
                      placeholder="Descripcion"
                      class="form-control mb-2"
                      value="{{$nota->descripcion}}"
                    />
                    <button class="btn btn-primary btn-block" type="submit">Editar</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection