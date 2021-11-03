@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-lg-9 col-md-12">
            <h1>Actualizacion de datos</h1>
            <form class="row g-3 navbar" method="POST" action="/tecnico.update/ {{$user}}" >
                @csrf
                @method('PUT')
                <div class="col-md-4">
                    <label for="name" class="form-label">Nombrre completo</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>

                <div class="col-md-6">
                    <label for="category_id" class="form-label">Categoria</label><br>
                    <select class="form-select" id="category_id" name="category_id" required>
                        <option disabled value="">Categoria...</option>

                        @foreach($categories as $id => $category)

                        <option value="{{ $id }}" @if($id==old('category_id',$user ->category_id)) selected @endif
                            > {{ $category }}</option>

                        @endforeach

                    </select>
                </div>

                <div class="col-md-6">
                    <label for="proceedings" class="form-label">Expediente</label>
                    <input type="text" class="form-control" id="proceedings" name="proceedings"
                        value="{{ $user->proceedings }}">
                </div>

                <div class="col-md-6">
                    <label for="section_id" class="form-label">Seccion</label><br>
                    <select class="form-select" id="section_id" name="section_id" required>
                        <option disabled value="">Selecionar...</option>

                        @foreach($sections as $id => $name)
                        <option value="{{ $id }}" @if($id==old('section_id',$user ->section_id) ) selected @endif
                            > {{ $name }}</option>

                        @endforeach

                    </select>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                {{-- <div class="col-md-6">
                    <label for="nsi" class="form-label">N° de sesiones iniciadas</label>
                    <input type="text" class="form-control" id="nsi" name="nsi" value="{{ $user->nsi }}">
                </div> --}}
                <div class="col-md-6">
                    <label for="workplace" class="form-label">Centro de trabajo</label>
                    <input type="text" class="form-control" id="workplace" name="workplace"
                        value="{{ $user->workplace }}">
                </div>
                {{-- <div class="col-md-6">
                    <label for="location" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $user->location }}">
                </div> --}}
                <div class="col-md-6">
                    <label for="abilities" class="form-label">Habilidades</label>
                    <input type="text" class="form-control" id="abilities" name="abilities"
                        value="{{ $user->abilities }}">
                </div>
                <div class="col-md-6">
                    <label for="notes" class="form-label">Notas</label>
                    <input type="text" class="form-control" id="notes" name="notes" value="{{ $user->notes }}">
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Actualizar contraseña</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{ $user->password }}">
                </div>

                <br>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
