@extends("layout.master")

@section('title', 'Contact Me')

@section('content')
    <div class="container">
        <h1>{!! $page_name !!}</h1>
        <p>{{ $page_description }}</p>
    </div>
@stop

@section('sidebar')
    @parent <br>
    this is sidebar from contact Me page
@stop