@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluit ">
        <div class="">
            <h1>Categorias</h1><br>

        </div>
        <div class="col-lg-9 col-md-12  ">

            <table class="table ">
                <thead class="table-dark">
                    <tr>
                        <td>ID</td>
                        <th>Categoria</th>
                        <th>fecha</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td  class="table-danger">{{ $category->id}}</td>
                        <td  class="table-info">{{ $category->category}}</td>
                        <td  class="table-info">{{ $category->fecha}}</td>
                        <td class="table-light">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-dark">editar</button>
                            <button type="button" class="btn btn-dark">eliminar</button>
                        </div>
                        </td>

                    </tr>



                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
</div>
@endsection
