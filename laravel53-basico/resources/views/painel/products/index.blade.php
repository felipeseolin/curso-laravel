@extends('painel.templates.template')

@section('content')
    <h1 class="title-pg">Listem dos produtos</h1>

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
                    <a href="">Editar</a>
                    <a href="">Deletar</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection