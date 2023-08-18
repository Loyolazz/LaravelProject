@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @parent
    <p> This Is Master Sidebar Sub</p>
@endsection

@section('content')
    @parent
    <p> Meu nome é {!!$nome!!}</p>
    <p> E o dia de hoje é: {{date ('d•m•Y')}}</p>
    
    @include('components.alerts', ['some' => 'ArthuLoy'])

    @include('chat')
@endsection

<script>
    var meusDadosJs = @json($myData);
</script>
