@extends('index')
@section('content')
    <div class="Filter">
        <section class="container-fluid ">
            <div class="row ">
                <section class="col-md-4 fixed  SlideTride offerTitle">
                    <div class="TrideText">
                        <h1 class="text-center Title "> СПА Зона</h1>
                    </div><!--.TrideText -->
                    <div class="SliderImgDiv" style="background-image: url({{ !empty($home_page_image) ? asset('/image/'.$home_page_image) : ''}});"></div>
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
            </div>
        </section>
    </div>
@endsection