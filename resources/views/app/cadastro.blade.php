@extends('site.basico')

@section('titulo',$titulo)

@section('conteudo')
    @include('site.menu')
    
    <div class="cadastro">
        <h2>Ficha de anamnese</h2>
        @include('app.components._form')
    </div>   
@endsection