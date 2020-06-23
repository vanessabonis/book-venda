@extends('templates.template')

@section('contet')
    <h1 class="text-center">
        VISUALIZAR
    </h1>

    <div class="col-8 m-auto">
      Título: {{$book->title}}<br>
      Páginas: {{$book->pages}}<br>
      Preço: R${{$book->price}}<br>
      Autor: {{$book->relUsers->name}}

    </div>

@endsection
