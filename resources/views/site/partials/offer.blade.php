<div class="Offers PageHeight" id="OffersID">
    <div class="container-fluid Filter">
        <div class="container">
            <div class="row justify-content-center">
                <section class="col-md-6  text-center OfferSection">

                    <h3 class="text-uppercase Title">СПЕЦИАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h3>
                    <ul class="text-capitalize text-left BrandList">
                        @foreach($offers as $offer)
                            <li><a href="#">{{$offer->title}}</a></li>
                        @endforeach
                            {{--{{route('site.single.offer', $offer->id)}}--}}
                    </ul>
                    <a href="{{route('site.special.offer')}}" class="text-uppercase BrandButton button"> все спецпредложение</a>
                </section>
            </div>
        </div>
    </div>
</div><!-- .Offers -->