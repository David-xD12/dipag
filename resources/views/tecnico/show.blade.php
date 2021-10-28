@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

<div class="content">
    <div class="container-fluid"> 
        <div class="col-lg-9 col-md-12">
            <form class="row g-3 navbar" action="/tecnico/{{ $tecnico->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-4">
                  <label for="name" class="form-label">Nombrre completo</label>
                  <input type="text" class="form-control" id="name" value="{{ $tecnico->name }}" >
                </div>
                <div class="col-md-6">
                    <label for="category" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="category" value="{{ $tecnico->category }}" >
                  </div>
                <div class="col-md-6">
                  <label for="proceedings" class="form-label">Expediente</label>
                  <input type="text" class="form-control" id="proceedings" value="{{ $tecnico->proceedings }}" >
                </div>

               {{--  <div class="col-md-6">
                  <label for="validationDefault04" class="form-label">Seccion</label>
                  <select class="form-select" id="validationDefault04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                  </select>
                </div> --}}
                <div class="col-md-6">
                  <label for="nsi" class="form-label">N° de sesiones iniciadas</label>
                  <input type="text" class="form-control" id="nsi" value="{{ $tecnico->nsi }}" >
                </div>
                <div class="col-md-6">
                    <label for="workplace" class="form-label">Centro de trabajo</label>
                    <input type="text" class="form-control" id="workplace" value="{{ $tecnico->workplace }}" >
                  </div>
                  <div class="col-md-6">
                    <label for="location" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="location" value="{{ $tecnico->location }}" >
                  </div>
                  <div class="col-md-6">
                    <label for="abilities" class="form-label">Habilidades</label>
                    <input type="text" class="form-control" id="abilities" value="{{ $tecnico->abilities }}" >
                  </div>
                  <div class="col-md-6">
                    <label for="notes" class="form-label">Notas</label>
                    <input type="text" class="form-control" id="notes" value="{{ $tecnico->notes }}" >
                  </div>
                  {{-- <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">Cambio de contraseña</label>
                    <input type="text" class="form-control" id="validationDefault03" >
                  </div>
                  <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">Cambio de correo</label>
                    <input type="text" class="form-control" id="validationDefault03" >
                  </div> --}}
            <br>
                <div class="col-12">
                  <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>  
       </div>
    </div>
</div>   
        

@endsection