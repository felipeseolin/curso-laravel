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
@endsection