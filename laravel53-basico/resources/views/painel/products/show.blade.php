@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">Produto: <b>{{$product->name}}</b></h1>

    <a href="{{route('produtos.index')}}" class="btn btn-info">Voltar</a>

    <p><b>Ativo:</b> {{$product->active}}</p>
    <p><b>Numero:</b> {{$product->number}}</p>
    <p><b>Categoria:</b> {{$product->category}}</p>
    <p><b>Descriçao:</b> {{$product->description}}</p>

    <hr>

    <form class="form" method="post" action="{{route('produtos.destroy', $product->id)}}">
        {!! method_field('DELETE') !!}
        {!! csrf_field() !!}
        <button class="btn btn-danger">Deletar</button>
    </form>
@endsection