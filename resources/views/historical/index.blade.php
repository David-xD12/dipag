@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluid">       
    <div class="col-lg-9 col-md-12">
    <form class="navbar-form">
        <div class="input-group no-border">
        <input type="text" value="" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-white btn-round btn-just-icon">
          <i class="material-icons">search</i>
          <div class="ripple-container"></div>
        </button>
        </div>
      </form>
    <div class="card">
      <div class="card-header card-header-warning">
        <h4 class="card-title">Employees Stats</h4>
        <p class="card-category">New employees on 15th September, 2016</p>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>Numero de Escalafon</th>
            <th>Nombre</th>
            <th> Expediente</th>
            <th> Especialidad</th>
            <th> Recomendado actual</th>
            <th>Vencimiento de Recomendado actual</th>
            <th>Fecha de ultima recomendación</th>
            <th>Fecha de ingreso de ultimo recomendado</th>
          </thead>
          <tbody>
              
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
               
               
              </td>
            </tr>
        
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
  @endsection
