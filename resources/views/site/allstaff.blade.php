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
        </div>
    </div>
@endsection