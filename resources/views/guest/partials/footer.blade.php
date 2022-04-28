<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>
    <div class="contenitore">
        <div class="row">
          <div class="col_left">
            <div>
              <ul class="list_foot">
                <h3 class="title_list_foot">DC COMICS</h3>
                @foreach ($arrayfooter1 as $item)
                <li class="li">
                  <a class="link_footer" href="#">{{ $item['text'] }}</a>
                </li> 
                @endforeach
              </ul>
    
              <ul class="list_foot">
                <h3 class="title_list_foot">SHOP</h3>
                @foreach ($arrayfooter2 as $item)
                <li class="li">
                  <a class="link_footer" href="#">{{ $item['text'] }}</a>
                </li> 
                @endforeach
              </ul>
            </div>
    
            <div>
              <ul class="list_foot">
                <h3 class="title_list_foot">DC</h3>
                @foreach ($arrayfooter3 as $item)
                <li class="li">
                  <a class="link_footer" href="#">{{ $item['text'] }}</a>
                </li> 
                @endforeach
              </ul>
            </div>
    
            <div>
              <ul class="list_foot">
                <h3 class="title_list_foot">SITES</h3>
                @foreach ($arrayfooter4 as $item)
                <li class="li">
                  <a class="link_footer" href="#">{{ $item['text'] }}</a>
                </li> 
                @endforeach
              </ul>
            </div>
          </div>
    
          <div class="col_right">x
            <img class="logo_big" src={{url('/images/dc-logo-bg.png')}} alt="" />
          </div>
        </div>
        <div class="edit">
          <div class="col_edit_left">
            <button class="button">SIGN-UP NOW!</button>
          </div>
    
          <div class="col_edit_right">
            <div class="follow">FOLLOW US</div>
            <img class="logos" src={{url('/images/footer-facebook.png')}} alt="" />
            <img class="logos" src={{url('/images/footer-twitter.png')}} alt="" />
            <img class="logos" src={{url('/images/footer-youtube.png')}} alt="" />
            <img class="logos" src={{url('/images/footer-pinterest.png')}} alt="" />
            <img class="logos" src={{url('/images/footer-periscope.png')}} alt="" />
          </div>
        </div>
      </div>
</body>
</html>