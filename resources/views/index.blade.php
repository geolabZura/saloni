<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miks</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/site/css/styles.css')}}">
</head>

<body style="	background-image: url({{ !empty($body_image) ? asset('/image/'.$body_image) : ''}});">

    {{--main content--}}
    @yield('content')

    <script>
        var lang = parseFloat({{!empty($map->lang) ? $map->lang : ''}});
        var lat = parseFloat({{!empty($map->lat) ? $map->lat : ''}});
        var hint = '{{!empty($map->hint) ? $map->hint : ''}}';
        var balloon = '{{!empty($map->balloon) ? $map->balloon : ''}}';
    </script>
    <script type="application/javascript" src="{{asset('/site/js/jquery-3.3.1.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('/site/js/bootstrap.min.js')}}"></script>
    <script type="application/javascript" src="{{asset('/site/js/bootstrap.bundle.min.js')}}"></script>
    <script type="application/javascript" src="https://api-maps.yandex.ru/2.1/?lang=en_US"></script>
    <script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{asset('/site/js/script.js')}}"></script>

</body>
</html>

