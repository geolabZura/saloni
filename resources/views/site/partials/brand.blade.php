<div class="Brands PageHeight" id="BrandsID">
    <div class="container-fluid Filter">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                    <div class="smallCircle" style="background-image: url({{ !empty($brand_small_image) ? asset('/image/'.$brand_small_image) : '' }});"></div>
                    <div class="BigCircle" style="background-image: url({{ !empty($brand_large_image) ? asset('/image/'.$brand_large_image) : '' }});"></div>
                </div>
                <div class="col-md-3 BrandListContainer">
                    <h3 class="text-uppercase text-left Title">
                        our brands
                    </h3>
                    <ul class="text-uppercase BrandList">
                        <li><a href="#">algotherm</a></li>
                        <li><a href="#">comfort zone</a></li>
                        <li><a href="#">tanamera</a></li>
                        <li><a href="#">masura</a></li>
                        <li><a href="#">senscience</a></li>
                        <li><a href="#">kerastase</a></li>
                    </ul>
                    <button class="text-uppercase BrandButton">все бренды</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- .Brands -->