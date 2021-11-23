@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container-fluit">
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
                <h1>Lista de tecnicos</h1><br>

            </div>
            <div class="float-start">
                <div class="">
                    <div class="">
                        <h4 class="card-title">Empleados </h4>
                        <p class="card-category"></p>
                    </div>
                    <div class="col-lg-5 col-md-5 float-end" style="top:2rem">
                        <form class="navbar-form" {{ route('tecnico.index') }} method="GET">
                            @csrf
                            <div class="input-group no-border float-end">
                                <input type="text" name="buscar" id="buscar" value="{{ $buscar }}" class="form-control"
                                       placeholder="Buscar tecnico...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive">

                        <table class="table ">
                            <thead class="table-dark">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Expediente</th>
                            <th>Categoria</th>
                            <th></th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->proceedings }}</td>
                                    <td>{{ $user->category_id }}</td>

                                    {{-- <td>{{$user->categories->category }}</td> --}}
                                    <td>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <form action="{{ route('tecnico.destroy', $user->id) }}" method="POST">

                                            <button type="button" class="btn btn-warning"><a style="color:white" href="{{ route('tecnico.edit',$user->id) }}">Editar</a>
                                            </button>

                                            <button type="button" class="btn btn-dark"><a
                                                    style="color:white; margin:0px; padding-button:30px"
                                                    href="{{ route('tecnico.category', $user->id) }}">Actualizar
                                                    categoria</a></button>
                                                @csrf
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-dark">Eliminar</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>

                            <div class="float-none">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-dark" style="top:-20px"><a
                                            style="color:white; margin: 0px; padding-button:30px"
                                            href="{{ route('tecnico.create') }}">Agregar</a></button>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                </div>
                            </div>

                        </table>

                        {{ $users->links() }}
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
