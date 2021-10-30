@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <div class="container-fluit">
        <div class="">
            <h1>Categorias</h1><br>
        </div>
            <form class="row navbar" action="{{ route('tecnico.category_update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <label for="disabledTextInput" class="form-label">Nombre </label>
      <input type="text" id="disabledTextInput" class="form-control" value="{{ $user->name }}">
                  </div>
                  <div class="col-md-6">
                    <label for="category_id" class="form-label">Categoria</label><br>
                    <select class="form-select" id="category_id" name="category_id" required>
                      <option  disabled value="">Categoria...</option>

                      @foreach($categories as $id => $category)

                      <option value="{{ $id }}"

                    @if($id ==  old('category_id',$user ->category_id)) selected @endif
                      > {{ $category }}</option>

                      @endforeach

                    </select>
                  </div>
                  <div class="col-12">
                    <button  class="btn btn-primary" type="submit">Guardar</button>
                  </div>
            </form>


    </div>
</div>
</div>
@endsection
