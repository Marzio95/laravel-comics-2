@extends ('guest.template.base')

@section ('content')
<div class="contenitore">
    <div class="jumbo">
        <img class="comic_little_img" src="{{url($comic['thumb'])}}" alt="cardText" />
    </div>
    <div class="blue_row_img"></div>
    
    <div class="row_series_comic">
        <div class="container2_comic">

            <div class="description_comic">
                <h1 class="title_comic">{{ $comic['title'] }}</h1>
                <div class="green_bar">
                    <div class="price_bar">
                        <span class="yellow">US.Price: <span class="white_price">{{ $comic['price'] }}</span></span>
                        <span class="available">available</span>
                    </div>
                    <div class="border">
                        <span class="yellow uppercase">Check Availability</span>
                    </div>
                </div>
                <p class="paragrafo">{{ $comic['description'] }}</p>
             </div>

            <div>
                <div class="advertisement">ADVERTISEMENT</div>
                <img src="/images/adv.jpg" alt=""> 
            </div>

        </div>

    </div>

    <div class="row_series_comic_gray">
        <div class="container2_comic">
            <div class="col_left_comic">
                <h2 class="titoli_gray">Talent</h2>
                <hr>
                <div class="artist_space">
                    <h4>Art by:</h4>
                    <p class="color_blue_dc">
                        @foreach ($comic['artists'] as $item)
                            {{ $item }},
                        @endforeach
                    </p>
                </div>

                <hr>
                <div class="artist_space">
                    <h4>Written by:</h4>
                    <p class="color_blue_dc">
                        @foreach ($comic['writers'] as $item)
                            {{ $item }},
                        @endforeach
                    </p>
                </div>
                <hr>
            </div>

            <div class="col_left_comic margin_left">
                <h2 class="titoli_gray">Specs</h2>
                <hr>
                <div class="artist_space">
                    <h4>Series:</h4>
                    <span class="color_blue_dc uppercase">{{ $comic['series'] }}</span>
                </div>

                <hr>
                <div class="artist_space">
                    <h4>U.S. Price:</h4>
                    <span class="color_gray_dc">{{ $comic['price'] }}</span>
                </div>
                <hr>

                <div class="artist_space">
                    <h4>On Sale Date:</h4>
                    <span class="color_gray_dc">{{ $comic['sale_date'] }}</span>
                </div>
                <hr>
            </div>

        </div>
    </div>


    <div class="row_blue became_gray">
      <div class="container_series">
        <ul class="ul_dc_logo height_100">
            @foreach ($arraymainbar as $item)
            <li class="li_dc_logo trasform_li">
              <img class="dc_logo_pictures filter" src="{{url($item['img'])}}" alt="" />
              <a class="link_dc_logo change_link" href="#">{{ $item['text'] }}</a>
            </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection