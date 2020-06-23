@extends('templates.template')

@section('contet')
    <h1 class="text-center">
        CRUD
    </h1>

    <div class="col-8 m-auto">
    	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Preço</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    
  </tbody>
</table>
    </div>

@endsection
