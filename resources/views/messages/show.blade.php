@extends('layouts.app')

@section('content')

  <h1 class="h3">Mensaje Id: {{$message->id}}</h1>
  @include('messages.message')

@endsection
