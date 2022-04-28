<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>

<body>
    <div class="container">
        <img src="{{url('/images/dc-logo.png')}}" alt="" />
        <ul>
            @foreach ($arraynavbar as $item)
            <li class="li_nav">
              <a class="link_nav" href="#">{{ $item['text'] }}</a>
            </li>    
            @endforeach
        </ul>
      </div>    
</body>
</html>