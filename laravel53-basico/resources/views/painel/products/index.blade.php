@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">Listem dos produtos</h1>

    <a href="{{route('produtos.create')}}" class="btn btn-primary">Cadastrar</a>

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th width="100px">Ações</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>
{{--                    <a href="{{url("/painel/produtos/{$product->id}/edit")}}">Editar</a>--}}
                    <a href="{{route('produtos.edit', $product->id)}}">Editar</a>
                    <a href="">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection