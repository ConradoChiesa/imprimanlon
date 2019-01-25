@extends ('layouts.app')
  @section('content')
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Pedir presupuesto</h5>
        </div>
        <div class="card-body">
          <form class="form" action="presupuesto" id=”frm” method="post" files=”true” enctype=”multipart/form-data”>
            @csrf
            @foreach ($errors->all() as $error)
              <p class="alert alert-danger">{{ $error}}</p><br>
            @endforeach
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <label for="">Titulo</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="" required>
            <label for="">Descripción</label>
            <textarea rows="4" cols="50" class="form-control" name="description" id="description" value="{{ old('description') }}" required>
            </textarea>
            <label for="">Adjuntar archivo</label>
            <input class="form-control" type="file" name="attached" id="attached" multiple>
            <div class="justify-content-left">
              <button class="btn btn-primary" type="submit" name="button">Enviar!</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<br>
    <a href="{{ url('/home') }}">Volver</a>
  @endsection
