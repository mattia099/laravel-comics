@extends('layout.standard')

@section('main')


<div class="content">
  <div class="container">
   
      @foreach ($comics as $index => $comic)
          <a href="{{ route( 'details.show' , ['id' => $index] ) }}" class="grid-item">
            <img src="{{ $comic['thumb']}} " alt="">
            <p>{{ $comic['title'] }}</p>
          </a>
      @endforeach
    
  </div>
</div>

<div class="menu">
  
    
      
  </div>
</div>
@endsection