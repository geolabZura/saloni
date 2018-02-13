<div class="container-fluid Slide PageHeight" id="SlideID">
    <div style="position: relative !important;">

        <div class="SlideSectionContainer owl-carousel">

            @if(!empty($services))
                @foreach($services as $service)

                    @if($loop->iteration===1)
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride">
                                <div class="TrideText">
                                    <h2 class="text-center TrideTitle">{{$loop->iteration}} СПА Зона</h2>
                                    @if(!empty($service->categories))
                                        @foreach($service->categories as $category)
                                            @if($loop->iteration>3)
                                                @break
                                            @else
                                                <p class="TrideList">
                                                    {{$category->name}}
                                                    <span class="Price">{{$category->price}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    @endif
                                    <button class="text-uppercase">ВСЕ УСЛУГИ</button>
                                </div><!--.TrideText -->
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>
                            </section>
                        </div>

                    @elseif($loop->iteration%3==0)
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride">
                                <div class="TrideText">
                                    <h2 class="text-center TrideTitle">{{$loop->iteration}} СПА Зона</h2>
                                    @if(!empty($service->categories))
                                        @foreach($service->categories as $category)
                                            @if($loop->iteration>3)
                                                @break
                                            @else
                                                <p class="TrideList">
                                                    {{$category->name}}
                                                    <span class="Price">{{$category->price}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    @endif
                                    <button class="text-uppercase">ВСЕ УСЛУГИ</button>
                                </div><!--.TrideText -->
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>
                            </section>
                        </div>
                    @elseif($loop->iteration%2==0)
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride text-center">
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>

                                <div class="TrideText">
                                    <h2 class="text-center TrideTitle">{{$loop->iteration}} СПА Зона</h2>
                                    @if(!empty($service->categories))
                                        @foreach($service->categories as $category)
                                            @if($loop->iteration>3)
                                                @break
                                            @else
                                                <p class="TrideList">
                                                    {{$category->name}}
                                                    <span class="Price">{{$category->price}}</span>
                                                </p>
                                            @endif
                                        @endforeach
                                    @endif
                                    {{--aq unda iyos offerebis page route--}}
                                    <a class="text-uppercase button" href="offer.html">ВСЕ УСЛУГИ</a>                                </div><!--.TrideText -->
                            </section>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
