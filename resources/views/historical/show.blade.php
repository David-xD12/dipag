@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container table-responsive" >
        <h2 class="card-title">Historico de recomendaciones </h2><br><br>
        <div >
            <table  class="table table-striped">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">N° de escalafon</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Expediente</th>
                    <th scope="col">Recomendado actual</th>
                    <th scope="col">Vencimiento de recmendacion</th>
                    <th scope="col">Fecha ultima recomendacion</th>
                    <th scope="col">fechs de ingreso recomendado</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
        </div>

    </div>
</div>

@endsection
