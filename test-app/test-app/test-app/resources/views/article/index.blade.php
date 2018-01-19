hello

@extends('article.layout')

@section('content')
@foreach ($articles as $article)
<p>{{$article -> id}}</p>
<p>{{$article -> title}}</p> 
@endforeach

@endsection
