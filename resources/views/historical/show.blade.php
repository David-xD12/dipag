@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container" style="background-color:#ffff">
        <div class="row">
           
            <ul class="list-group list-group-horizontal" >
                
                <li class="list-group-item active" aria-current="true">Numero de Escalafón</li>
                <li class="list-group-item active" aria-current="true">Numero de Escalafón</li>
                <li class="list-group-item active" aria-current="true">Expediente</li>
                <li class="list-group-item active" aria-current="true">Especialidad</li>
                <li class="list-group-item active" aria-current="true"> Recomendado actual</li>
                <li class="list-group-item active" aria-current="true">Vencimiento de Recomendado actual</li>
                <li class="list-group-item active" aria-current="true">Fecha de ultima recomendación </li>
                <li class="list-group-item active" aria-current="true"> Fecha de ingreso de ultimo recomendado</li>
              </ul>
              @csrf
              <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item" style="color: #0000"></li>
                <li class="list-group-item">{{ auth()->user()->name }}</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A third item</li>
              </ul>
            </div>
    </div>
</div>

  @endsection