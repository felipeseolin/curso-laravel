@extends('site.template.template1')

@section('content')
    <h1>Home Page do Site</h1>
    {{$teste}} = {{$teste2}} = {{$teste3}}
    <br>
    {{$var1 ?? 'var1: Valor default, ou seja, não existe'}}
    <br>
    {{$xss}}
    {{--
    Assim será executado
     {!! $xss !!}
     --}}

    @if($var1 == '1234')
        <p>É igual</p>
    @else
        <p>É diferente</p>
    @endif
    {{--    Verifica se é falso --}}
    @unless( $var1 == '1234')
        <p>Não é igual..unless</p>
    @endunless

    @for( $i = 0; $i < 10; $i++)
        <p>For: {{$i}}</p>
    @endfor

    @if( count($arrayData) > 0)
        @foreach($arrayData as $array)
            <p>Foreach: {{$array}}</p>
        @endforeach
    @else
        <p>Tá vazio o foreach</p>
    @endif

    {{--    serve para não precisar de um IF para verificar se a quantidade é maior que 0 --}}
    @forelse($arrayData2 as $array)
        <p>Forelse: {{$array}}</p>
    @empty
        <p>Vazio no forelse!!</p>
    @endforelse

    @php
        // Aqui pode ser adicionado uma tag php
    @endphp


    @include('site.includes.sidebar', compact('var1'))

@endsection