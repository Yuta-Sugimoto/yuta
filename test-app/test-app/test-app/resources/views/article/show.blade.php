hello

@extends('article.layout')

@section('content')
<p>{{$article -> id}}</p>
<p>{{$article -> title}}</p> 
<p>{{$article -> body}}</p> 

@endsection
