@extends('index')
@section('content')
    <div class="Filter">
        <section class="container-fluid StaffPage">
            @if(!empty($staff))
                <div class="row height">
                    <section class="col-md-4 red fixed  SlideTride ">
                        <div class="TrideText">
                            <h2 class="text-center text-uppercase Title"> нашы специалисты</h2>
                            <div class=" text-left cursor  NameContainer" >
                                <h3 class="text-capitalize StaffName">
                                    {{$staff->name.' '.$staff->surname}}
                                </h3>
                                <p class="text-uppercase ">
                                    {{$staff->position}}
                                </p>
                            </div>
                        </div><!--.TrideText -->
                        <div class="SliderImgDiv" style="background-image:url({{asset('/image/'.$staff->image)}})"></div>
                    </section>
                    <div class="col-md-7 offset-md-4 StaffTextContainer TopFilter clearfix">
                        <p class=" text-left">
                            {!! $staff->description !!}
                        </p>
                    </div>
                    <div class="col-md-1 BackIcon">
                        <a href="{{route('site.all.staff')}}"><svg class="CloseIcon" enable-background="new 0 0 32 32" version="1.0"
                                                     viewBox="0 0 512 512"
                                                     width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <polygon points="445.2,109.2 402.8,66.8 256,213.6 109.2,66.8 66.8,109.2 213.6,256 66.8,402.8 109.2,445.2 256,298.4 402.8,445.2   445.2,402.8 298.4,256 "/>
                                    </svg></a>
                    </div>
                </div>
            @endif

        </section>
    </div>
@endsection