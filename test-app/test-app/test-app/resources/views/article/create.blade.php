hello

@extends('article.layout')

@section('content')
<form method="POST" action="/article/store">
{{ csrf_field() }}         
          <p>タイトル：<input type="text" name="title"></p>
          <p>本文：<input type="text" name="body"></p>
          <p><input type="submit" value="作成する"></p>
          </form>

@endsection
