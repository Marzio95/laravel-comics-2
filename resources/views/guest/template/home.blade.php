@extends('guest.template.base')

@section('title')
    DC Comics
@endsection

@section('content')
<div class="contenitore">
    <div class="jumbo">
      <div class="current">CURRENT SERIES</div>
    </div>
    <div class="row_series">
      <div class="container2">
          @foreach ($arraycard as $item)
          <div class="card">
              <a class="link_to_comic" href="http://127.0.0.1:8000/{{ $item['id'] }}">
              <img class="series" src="{{url($item['thumb'])}}" alt="cardText" />
              <h3 class="title_series">{{ $item['series'] }}</h3>
            </a>
          </div>
          @endforeach

        <div class="center"><button class="load">LOAD MORE</button></div>
      </div>
    </div>
    <div class="row_blue">
      <div class="container_series">
        <ul class="ul_dc_logo">
            @foreach ($arraymainbar as $item)
            <li class="li_dc_logo">
              <img class="dc_logo_pictures" src="{{url($item['img'])}}" alt="" />
              <a class="link_dc_logo" href="#">{{ $item['text'] }}</a>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection