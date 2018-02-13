<div class="container-fluid Slide PageHeight" id="SlideID">
    <div class="row" style="position: relative;">

        <div class="SlideSectionContainer owl-carousel">

            @if(!empty($services))
                @foreach($services as $service)
                    @if($loop->iteration%2==0)
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride text-center">
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
                                    <a class="text-uppercase button" href="{{route('site.service', $service->id)}}">ВСЕ УСЛУГИ</a>
                                </div>
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>
                            </section>
                        </div>
                    @else
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
                                    <a class="text-uppercase button" href="{{route('site.service', $service->id)}}">ВСЕ УСЛУГИ</a>
                                </div><!--.TrideText -->
                            </section>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
