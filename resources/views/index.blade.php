@extends('templates.template')

@section('contet')
    <h1 class="text-center">
        CRUD
    </h1>

    <div class="text-center mt-3 mb-4">
      <a href="{{url('books/create')}}">
        <button class="btn btn-success">Cadastrar</button>
      </a>
    </div>


    <div class="col-8 m-auto">
    	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Preço</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <!--Relacionamento-->
    @foreach($book as $books)
      
      <tr>
        <th scope="row">{{$books->id}}</th>
        <td>{{$books->title}}</td>
        <td>{{$books->relUsers->name}}</td>
        <td>{{$books->price}}</td>

        <td>
          <a href="{{url("books/$books->id")}}">
            <button class="btn btn-secondary">Visualizar</button>
          </a>

          <a href="{{url("books/$books->id/edit")}}">
            <button class="btn btn-primary">Editar</button>
          </a>

          <a href="">
            <button class="btn btn-danger">Deletar</button>
          </a>
        </td>
     </tr>
    @endforeach
    
    
    
  </tbody>
</table>
    </div>

@endsection
