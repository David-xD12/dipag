@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')

<di v class="content">
    <div class="container-fluid">
        <div class="col-lg-9 col-md-12">
            <h1>Crear nuevo usuario</h1>
            <form class="row g-3 navbar" action="{{ route('tecnico.store') }}"  method="POST">
                @csrf
                <div class="col-md-4">
                  <label for="name" class="form-label">Nombrre completo</label>
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$user->name) }}" ><br>
                  {!! $errors->first('name', '<small>:message</small>') !!}
                </div>

                <div class="col-md-6">
                  <label for="category_id" class="form-label">Categoria</label><br>
                  <select class="form-select" id="category_id" name="category_id" >
                    <option selected disabled value="">Categoria...</option>

                    @foreach($categories as $id => $category)

                    <option value="{{ $id }}"

                  @if($id === old('category_id',$user ->category_id)) selected @endif
                    > {{ $category }}</option>
                    @endforeach

                  </select><br>
                  {!! $errors->first('category_id', '<small>:message</small>') !!}
                </div>

                <div class="col-md-6">
                  <label for="proceedings" class="form-label">Expediente</label>
                  <input type="text" class="form-control" id="proceedings" name="proceedings" value="{{ old('proceedings',$user->proceedings) }}" >
                  {!! $errors->first('proceedings', '<small>:message</small>') !!}<br>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email',$user->email) }}" >
                    {!! $errors->first('email', '<small>:message</small>') !!}<br>
                  </div>

                <div class="col-md-6">
                  <label for="section_id" class="form-label">Seccion</label><br>
                  <select class="form-select" id="section_id" name="section_id" >
                    <option selected disabled value="">Selecionar...</option>

                    @foreach($sections as $id => $name)
                    <option value="{{ $id }}"

                  @if($id === old('section_id',$user ->section_id)) selected @endif
                    > {{ $name }}</option>

                    @endforeach

                  </select><br>
                  {!! $errors->first('section_id', '<small>:message</small>') !!}
                </div>

                <div class="col-md-6">
                    <label for="workplace" class="form-label">Centro de trabajo</label>
                    <input type="text" class="form-control" id="workplace" name="workplace" value="{{ old('workplace',$user->workplace) }}" >
                    {!! $errors->first('workplace', '<small>:message</small>') !!}<br>
                  </div>

                  <div class="col-md-6">
                    <label for="abilities" class="form-label">Habilidades</label>
                    <input type="text" class="form-control" id="abilities" name="abilities" value="{{ old('abilities',$user->abilities) }}" >
                    {!! $errors->first('abilities', '<small>:message</small>') !!}<br>
                  </div>
                  <div class="col-md-6">
                    <label for="notes" class="form-label">Notas</label>
                    <input type="text" class="form-control" id="notes" name="notes" value="{{ old('notes',$user->notes) }}" >
                    {!! $errors->first('notes', '<small>:message</small>') !!}<br>
                  </div>
                <div class="col-md-6">
                    <label for="rol_id" class="form-label">Rol</label><br>
                    <select class="form-select" id="rol_id" name="rol_id" >
                        <option selected disabled value="">Selecionar...</option>

                        @foreach($roles as $id => $name)
                            <option value="{{ $id }}"

                                    @if($id === old('rol_id',$user ->rol_id)) selected @endif
                            > {{ $name }}</option>

                        @endforeach

                    </select><br>
                    {!! $errors->first('rol_id', '<small>:message</small>') !!}
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="{{ $errors->has('password') ? 'is-invalid' : '' }}"   autocomplete="password" autofocus disabled>
                    {!! $errors->first('password', '<small>:message</small>') !!}<br>
                  </div>


            <br>
            <br>
                <div class="col-12">
                  <button  class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>

       </div>
    </div>
</div>


@endsection
