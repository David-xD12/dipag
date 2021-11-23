@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container">
        <div class="">
            <h1>Actualizar Categoria</h1><br>
        </div>
        <form class="row navbar" action="{{ route('tecnico.category_update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="container">
            <div class="col-md-12">
                <small><span>
                        <h3>Ultima actualizacion</h3>
                    </span></small>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="disabledTextInput" class="form-label">Administrador </label>
                            <input type="text" class="form-control"  value="{{ $user->actAdmin }}"
                                disabled><br>
                        </div>
                        <div class="col-md-6">
                            <label for="disabledTextInput" class="form-label">Ultima Actualizacion </label>
                            <input type="text" id="update" name="update" class="form-control"
                                value="{{ $user->fechaAct }}" disabled><br>
                        </div>
                    </div>

            </div>
            <div class="col-md-12">
                <small><span>
                        <h3>Actualizar</h3>
                    </span></small>
                    <div class="row g-3">
                        <div class="col-md-5">
                            <label for="disabledTextInput" class="form-label">Administrador </label>
                            <input type="text" class="form-control" id="actAdmin" name="actAdmin"  value="{{ auth()->user()->name }}"  >
                            <br>
                        </div>
                        <div class="col-md-5">
                            <label for="disabledTextInput" class="form-label">Ultima Actualizacion </label>
                            <input type="date" id="fechaAct" name="fechaAct" class="form-control" placeholder="Last name"
                                value="{{ old('fechaAct',date('Y-m-d') )  }}" ><br>
                        </div>
                        <div class="col-md-5">
                            <label for="disabledTextInput" class="form-label">Nombre </label>
                            <input type="text" id="disabledTextInput" class="form-control" value="{{ $user->name }}"
                                disabled><br><br>
                        </div>
                        <div class="col-md-5">
                            <label for="category_id" class="form-label">Categoria</label><br>
                            <select class="form-select form-select-sm" id="category_id" name="category_id"
                                aria-label="Default select example" required>
                                <option disabled value="">Categoria...</option>

                                @foreach($categories as $id => $category)

                                <option value="{{ $id }}" @if($id==old('category_id',$user ->category_id)) selected @endif
                                    > {{ $category }}</option>

                                @endforeach

                            </select>
                        </div><br><br>
                    </div>
                    </div>


            <div class="col-md-12">
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
                <br>
        </div>
        </form>


    </div>
</div>
</div>
@endsection
