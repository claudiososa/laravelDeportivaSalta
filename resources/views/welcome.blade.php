@extends('layouts.app')

@section('content')
  <div class="jumbotrop text-center">
    <h1>Deportiva Salta</h1>
    <nav >
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/acerca">Sobre Nosotros</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row">
    <form class="" action="/messages/create" method="post">
      {{csrf_field()}}
      <div class="form-group @if($errors->has('message')) has-danger @endif">
        <input class="form-control" placeholder="que estas pensando" type="text" name="message" value="">
        @if ($errors->has('message'))
            @foreach ($errors->get('message') as $error)
              <div class="form-control-feedback">
                {{$error}}
              </div>
            @endforeach
        @endif
      </div>
    </form>
  </div>
  <div class="row">
    @forelse ($messages as $message)
      <div class="col-6">
        @include('messages.message')
      </div>
    @empty
      <p>No hay contenido destacado</p>
    @endforelse
    @if(count($messages))
      <div class="mt-2 mx-auto">
        {{$messages->links('pagination::bootstrap-4')}}
      </div>
    @endif
  </div>
@endsection
