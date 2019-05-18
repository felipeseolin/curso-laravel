@extends('painel.templates.template')

@section('content')

    <h1 class="title-pg">Gestão de Produto</h1>


    @if(isset($errors) && count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif

    @if (isset($product))
        <form class="form" method="post" action="{{route('produtos.update', $product->id)}}">
            {!! method_field('PUT') !!}
    @else
        <form class="form" method="post" action="{{route('produtos.store')}}">
    @endif
        {{--        <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
        {!! csrf_field() !!}
        <div class="form-group">
            <input type="text" name="name" placeholder="Nome:" class="form-control"
                   value="{{$product->name ?? old('name')}}">
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="active" @if(isset($product) && $product->active === true) checked @endif>
                Ativo?
            </label>
        </div>

        <div class="form-group">
            <input type="text" name="number" placeholder="Numero:" class="form-control"
                   value="{{$product->number ?? old('number')}}">
        </div>

        <div class="form-group">
            <select name="category" class="form-control ">
                <option value="">Escolha a Categoria</option>
                @foreach($categorys as $category)
                    <option value="{{$category}}"
                            @if (isset($product) && $product->category == $category)

                            selected
                            @endif
                    >{{$category}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <textarea name="description" class="form-control">{{$product->description ?? old('description')}}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
@endsection