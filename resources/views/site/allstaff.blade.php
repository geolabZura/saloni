@extends('index')
@section('content')
    <div class="Filter height">
        <div class="container-fluid AllStaff ">
            <div class="row">
                <div class="col-md-11 staffContainer TopFilter clearfix">
                    <h2 class="text-left text-uppercase Title"> нашы специалисты</h2>
                    @if(!empty($staffs))
                        @foreach($staffs as $staff)
                            <div class="StaffCard">
                                <img class="card-img-top" src="{{asset('/image/'.$staff->image)}}" alt="Card image cap">
                                <div class="CardTextContainer ">
                                    <h4 class=" card-title text-capitalize SlideName">
                                        {{$staff->name.' '.$staff->surname}}
                                    </h4>
                                    <p class="card-text text-uppercase Profession">
                                    {{$staff->position}}
                                    </p>
                                </div>
                                <a href="{{route('site.single.staff', $staff->id)}}" class="btn btn-primary button">подробнее</a>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="col-md-1 BackIcon">
                    <a href="{{route('site.main')}}"><svg class="CloseIcon" enable-background="new 0 0 32 32" version="1.0"
                                                           viewBox="0 0 512 512"
                                                           width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <polygon points="445.2,109.2 402.8,66.8 256,213.6 109.2,66.8 66.8,109.2 213.6,256 66.8,402.8 109.2,445.2 256,298.4 402.8,445.2   445.2,402.8 298.4,256 "/>
                    </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection