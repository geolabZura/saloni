<div class="container-fluid Slide PageHeight" id="SlideID">
    <div class="row" style="position: relative;">

        <div class="SlideSectionContainer owl-carousel">

            @if(!empty($services))
                @foreach($services as $service)
                    @if($loop->iteration%2==0)
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride text-center">
                                <div class="TrideText">
                                    <div class="forcentering">
                                        <h2 class="text-center TrideTitle">{{$service->title}}</h2>
                                        @if(!empty($service->categories))
                                            @foreach($service->categories as $category)
                                                @if($loop->iteration>3)
                                                    @break
                                                @else
                                                    <div class="TrideList">
                                                        <p class="Truncate">
                                                            {{$category->name}}
                                                        </p>
                                                        <span class="Price">{{$category->price}}</span>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                        <a class="text-uppercase button" href="{{route('site.service', $service->id)}}">ВСЕ УСЛУГИ</a>
                                    </div>
                                </div>
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>
                            </section>
                        </div>
                    @else
                        <div class="PageHeight SlideSectionContainerSlide">
                            <section class="SlideTride text-center">
                                <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$service->image)}})"></div>
                                <div class="TrideText">
                                    <div class="forcentering">
                                        <h2 class="text-center TrideTitle">{{$service->title}}</h2>
                                        @if(!empty($service->categories))
                                            @foreach($service->categories as $category)
                                                @if($loop->iteration>3)
                                                    @break
                                                @else
                                                    <div class="TrideList">
                                                        <p class="Truncate">
                                                            {{$category->name}}
                                                        </p>
                                                        <span class="Price">{{$category->price}}</span>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                        <a class="text-uppercase button" href="{{route('site.service', $service->id)}}">ВСЕ УСЛУГИ</a>
                                    </div>
                                </div><!--.TrideText -->
                            </section>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>

