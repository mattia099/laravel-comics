@extends('layout.standard')

@section('main')


<div class="content">
  <div class="container">
   
      @foreach ($comics as $comic)
          <div class="grid-item">
            <img src="{{ $comic['thumb']}} " alt="">
            <p>{{ $comic['title'] }}</p>
          </div>
      @endforeach
    
  </div>
</div>

<div class="menu">
  
    
      
  </div>
</div>
@endsection