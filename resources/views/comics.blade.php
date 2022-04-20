@extends('layout.standard')

@section('main')
  @dump($comics)
  <ul>
  @foreach ($comics as $comic)
      <li>{{$comic['title']}}</li>
  @endforeach
  </ul>
@endsection