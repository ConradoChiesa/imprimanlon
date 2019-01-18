@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-left">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
              </div>

              <div class="card-body col-6">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif
                  <h6>Bienvenido, {{ Auth::user()->name }}!</h6>
              </div>
          </div>
          <div class="card">
            <!-- <div class="card-body col-6">esto
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
              @endif
            </div> -->
          </div>
        </div>
      </div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Pedir presupuesto</h5>
      </div>
      <div class="card-body">
        <form class="form" action="jobs" method="post">
          @csrf
          <label for="">Titulo</label>
          <input class="form-control" type="text" name="titulo" value="" placeholder="">
          <label for="">Descripción</label>
          <textarea rows="4" cols="50" class="form-control" name="description">
          </textarea>
          <label for="">Adjuntar archivo</label>
          <input class="form-control"type="file" name="file" value="" placeholder="">
          <div class="justify-content-left">
            <button class="btn btn-primary" type="submit" name="button">Enviar!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Otro tipo de pedido</h5>
      </div>
      <div class="card-body">
        <form class="form" action="jobs" method="post">
          @csrf
          <label for="">Titulo</label>
          <input class="form-control" type="text" name="titulo" value="" placeholder="">
          <label for="">Descripción</label>
          <textarea rows="4" cols="50" class="form-control" name="description">
          </textarea>
          <label for="">Adjuntar archivo</label>
          <input class="form-control"type="file" name="file" value="" placeholder="">
          <div class="justify-content-left">
            <button class="btn btn-outline-secondary" type="submit" name="button">Enviar!</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

      </div>

@endsection
