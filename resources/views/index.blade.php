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
    {{--header menu, about us content--}}
    @include('site.partials.header.header')

    {{--footer menu content--}}
    @include('site.partials.footer')

    {{--slider services content--}}
    @include('site.partials.slider')

    {{--staff content--}}
    @include('site.partials.staff.staff')

    {{-- brand content--}}
    @include('site.partials.brand')

    {{--offers content--}}
    @include('site.partials.offer')

    {{--gallery image content--}}
    @include('site.partials.gallery')

    {{--contact and map content--}}
    @include('site.partials.contact')
<script type="application/javascript" src="{{asset('/site/js/jquery-3.3.1.min.js')}}"></script>
<script type="application/javascript" src="{{asset('/site/js/bootstrap.min.js')}}"></script>
<script type="application/javascript" src="{{asset('/site/js/bootstrap.bundle.min.js')}}"></script>
<script type="application/javascript" src="https://api-maps.yandex.ru/2.1/?lang=en_US"></script>
<script type="application/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="{{asset('/site/js/script.js')}}"></script>

</body>
</html>

