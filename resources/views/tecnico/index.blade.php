@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid"> 
   <!-- <div>  
   <h1>
          Busqueda de usuarios
          {{ Form::open(['route' => 'tecnico.index', 'method' => 'GET', 'class' => 'form-inline pull-right'])  }}
          <div class="form-group">
          {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre' ])  }}
         </div>
         <div class="form-group">
          {{ Form::text('proceedings', null, ['class' => 'form-control', 'placeholder' => 'Expediente' ])  }}
         </div>
         <div class="form-group">
           <button type="submit" class="btn btn-white btn-round btn-just-icon">
           <i class="material-icons">search</i>
           </button>
         </div>
          {{ Form::close()  }}
      </h1>
   </div> -->
   <div class="col-lg-6 col-md-12"> 
   <form class="navbar-form" {{ route('tecnico.index') }} method="GET">
   @csrf
        <div class="input-group no-border">
        <input type="text" name="buscar" id="buscar" value="{{ $buscar }}" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
      </div>
      <div class="col-lg-6 col-md-12">
       <div class="card">
         <div class="card-header card-header-warning">
           <h4 class="card-title">Employees Stats</h4>
            <p class="card-category">New employees on 15th September, 2016</p>
         </div>
         <div class="card-body table-responsive">
           <table class="table table-hover table-striped">
             <thead class="text-warning">
               <th>ID</th>
               <th>Nombre</th>
               <th>Expediente</th>
             </thead>
                <tbody>
                   @foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->proceedings }}</td>
                    <td>
                     <button type="button" class="btn btn-warning"><a href="/tecnicos/{{ $user->id }}/tecnico.edit">Editar</a></button>
                     <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                  </tr>   
                  @endforeach      
                    <button type="button" class="btn btn-danger"><a href="{{ route('tecnico.create') }}">Agregar</a></button>    
                </tbody>
           </table>
        </div>
       </div>
     </div>
    </div>
 </div>
  @endsection