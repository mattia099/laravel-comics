@extends('layout.standard')

@section('card-wrapper')


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

@endsection

@section('menu')
<div class="menu">
  <div class="container">
    <ul>
      <li>
        <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        <p>digital comics</p>
      </li>
      <li>
        <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
        <p>dc merchandise</p>
      </li>
      <li>
        <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
        <p>subscription</p>
      </li>
      <li>
        <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
        <p>comic shop locator</p>
      </li>
      <li>
        <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
        <p>dc power visa</p>
      </li>
    </ul>
  </div>
</div>
@endsection