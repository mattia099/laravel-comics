@extends('layout.standard')

@section('card-wrapper')
  <div class="details">
    <div class="container-detail">
      <img src="{{$comic['thumb']}}" alt="">
    </div>
  </div>

  <div class="comic-info">
    <h2>ACTION COMICS #1000: THE DELUXE EDITION</h2>
    <p>{{ $comic['description'] }}</p>   
  </div>
@endsection



@section('menu')
<div class="menu detail">
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