@extends('index')
@section('content')
    <div class="Filter">
        <section class="container-fluid ">
            <div class="row ">
                <section class="col-md-4 fixed  SlideTride offerTitle">
                    <div class="TrideText">
                        <h1 class="text-center Title "> {{$service->title}}</h1>
                    </div><!--.TrideText -->
                    <div class="SliderImgDiv" style="background-image: url({{ !empty($service->image) ? asset('/image/'.$service->image) : ''}});"></div>
                </section>
                <!--shevvale-->
                <div class="col-md-7 offset-md-4 col-sm-12 OffersList TopFilter clearfix">
                    <nav class="offerPageList">
                        <ul>
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <li> {{$category->name}}<span class="Price">{{$category->price}}</span></li>
                                @endforeach
                            @endif
                        </ul>
                    </nav>
                </div>
                <div class="col-md-1 BackIcon">
                    <a href="{{route('site.main')}}"> <svg class="CloseIcon" enable-background="new 0 0 32 32" version="1.0"
                                                                       viewBox="0 0 512 512"
                                                                       width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <polygon points="445.2,109.2 402.8,66.8 256,213.6 109.2,66.8 66.8,109.2 213.6,256 66.8,402.8 109.2,445.2 256,298.4 402.8,445.2   445.2,402.8 298.4,256 "/>
                    </svg></a>
                </div>
            </div>
        </section>
    </div>
@endsection