@extends('templates.template')

@section('contet')
    <h1 class="text-center"> <hr>
        <!--Redirecionar para EDIT caso exista o livro-->
        @if(isset($book))
        	Editar
        @else
        	Cadastrar	
        @endif

    </h1>

    <!--Formulário com livros cadastrados-->
    <div class="col-8 m-auto">

    <!-- Validação / Required -->

        @if(isset($errors) && count($errors)>0)
          	<div class="text-center mt-4 mb-4 p-2 alert-danger">
          		@foreach($errors->all() as $erro)
          			{{$erro}}<br>
          		@endforeach
          	</div>
        @endif

      <!--Método PUT | Vai Definir o formulário pra edição de dados-->
       @if(isset($book))
          <form name="formEdir" id="formEdit" method="post" action="{{url("books/$book->id")}}">
            @method('PUT');
        @else
          <form name="formCad" id="formCad" method="post" action="{{url('books')}}"> 
        @endif
      
      	
      	@csrf 
      	<input class="form-control" type="text" name="title" id="title" placeholder="Título: " value="{{$book->title ?? ''}}"><br>

      	<select class="form-control" name="id_user" id="id_user">
      		
          <option value="{{$book->relUsers->id ?? ''}}">
            {{$book->relUsers->name ?? 'Autor'}}
          </option>

      		@foreach($users as $user)
      			<option value="{{$user->id}}">
      				{{$user->name}}
      			</option>
      		@endforeach
          
      	</select><br>

      	<!--Botões-->
      	<input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas: " value="{{$book->pages ?? ''}}"><br>

      	<input class="form-control" type="text" name="price" id="price" placeholder="Preço: " value="{{$book->pages ?? ''}}"><br>

      	<input class="btn btn-primary" type="submit" value= @if(isset($book)) Editar @else Cadastrar @endif ">

      </form>

    </div>

@endsection
