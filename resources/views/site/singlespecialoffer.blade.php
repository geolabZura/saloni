@extends('index')
@section('content')
    <div class="Filter height">
        <div class="container-fluid specOffers ">
            <div class="row">
                <div class="col-md-10 staffContainer TopFilter clearfix">
                    <h2 class="text-left text-uppercase Title">специалбные предложения</h2>
                    @if(!empty($special_offers))
                        @foreach($special_offers as $special_offer)
                            <div class="specOfferContainer ">
                                <div class="specOfferContent ">
                                    <h3 class="Title">{{$special_offer->title}}</h3>
                                    <p class="text-left Content">
                                        {!! $special_offer->description !!}
                                    </p>
                                </div>
                                <div class="imageContainer" style=" background-image: url({{'/image/'.$special_offer->image}});"></div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-1 BackIcon">
                    <a href="{{route('site.main')}}"> <svg class="CloseIcon" enable-background="new 0 0 32 32" version="1.0"
                                                        viewBox="0 0 512 512"
                                                        width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="445.2,109.2 402.8,66.8 256,213.6 109.2,66.8 66.8,109.2 213.6,256 66.8,402.8 109.2,445.2 256,298.4 402.8,445.2   445.2,402.8 298.4,256 "/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection