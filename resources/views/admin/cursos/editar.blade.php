@extends('layout.site')
@section('titulo', 'Cursos')
@section('conteudo')
    <div class="container">
        <h3 class="center">Editando cursos</h3>
        <div class="row">
            <form class="" action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
                <!--Gera o token obrigatorio -->
                {{csrf_field()}}
                <input type="hidden" name="_method" value="put">
                @include('admin.cursos._form')
                <button class="btn deep-orange">Atualizar</button>
            </form>
        </div>
    </div>
@endsection