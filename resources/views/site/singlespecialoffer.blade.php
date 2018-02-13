@extends('index')
@section('content')
    <div class="Filter height">
        <div class="container-fluid specOffers ">
            <div class="row">
                <div class="col-md-10 staffContainer TopFilter clearfix">
                    <h2 class="text-left text-uppercase Title">специалбные предложения</h2>
                    @if(!empty($special_offer))
                        <div class="specOfferContainer ">
                            <div class="specOfferContent ">
                                <h3 class="Title">{{$special_offer->title}}</h3>
                            </div>
                            <p class="text-left Content">
                                {!! $special_offer->description !!}
                            </p>
                            <div class="imageContainer" style=" background-image: url({{$Description->image}});"></div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection