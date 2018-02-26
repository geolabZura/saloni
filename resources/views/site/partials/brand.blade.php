<div class="Brands PageHeight" id="BrandsID">
    <div class="container-fluid Filter">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8 col-ms-12 BrandImageContainer">
                    <div class="smallCircle" style="background-image: url({{ !empty($brand_small_image) ? asset('/image/'.$brand_small_image) : '' }});"></div>
                    <div class="BigCircle" style="background-image: url({{ !empty($brand_large_image) ? asset('/image/'.$brand_large_image) : '' }});"></div>
                </div>
                <div class="col-md-3 BrandListContainer">
                    <h3 class="text-uppercase text-left Title">
                        our brands
                    </h3>
                    <ul class="text-uppercase BrandList">
                        @if(!empty($brands))
                            @foreach($brands as $brand)

                                <li><a href="{{$brand->link}}">{{$brand->title}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                    <a  href="{{route('site.brand')}}" class=" text-uppercase BrandButton button">все бренды</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- .Brands -->