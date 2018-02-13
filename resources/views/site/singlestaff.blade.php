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
                </div>
            @endif
        </section>
    </div>
@endsection