@extends('index')
@section('content')
    {{--header menu, about us content--}}
    @include('site.partials.header.header')

    {{--footer menu content--}}
    @include('site.partials.footer')

    {{--slider services content--}}
    @include('site.partials.slider')

    {{--staff content--}}
    @include('site.partials.staff')

    {{-- brand content--}}
    @include('site.partials.brand')

    {{--offers content--}}
    @include('site.partials.offer')

    {{--gallery image content--}}
    @include('site.partials.gallery')

    {{--contact and map content--}}
    @include('site.partials.contact')
@endsection