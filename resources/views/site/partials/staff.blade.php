<div class="Specialist PageHeight" id="SpecialistID">
    <div class="container-fluid Filter">
        <div class="container SpecialistContent">
            <div class="row">
                <section class=" col-md-6 col-sm-12 LeftSection text-center">
                    <div class="LeftContent"  id="scrollId">

                        <div class="force-overflow"></div>

                        <h3 class="text-uppercase Title Truncate">{{ !empty($about_staff->title) ?  $about_staff->title : ''}}</h3>

                        <div class="SectionText text-left">
                            {!! !empty($about_staff->description) ? $about_staff->description : '' !!}
                        </div>

                    </div>
                    {{--aq unda iyo route--}}
                    <a  href="{{route('site.all.staff')}}" class="text-uppercase SpecialistButton button">все специалисты</a>
                </section>
                <section class="col-md-4 col-sm-12 RightSection offset-md-2 ">
                    <div class="RightContent">
                        <div class="RightContentInner">
                            @if(!empty($staffs))
                                @foreach($staffs as $staff)
                                    <div class="stuffSLide active">
                                        <img class="d-block img-fluid RightSlide" src="{{asset('/image/'.$staff->image)}}" alt="First slide">
                                    </div>
                                @endforeach
                            @endif

                            <a class="prev" onclick="plusStaffSlides(-1)">
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 100 100" version="1.1" x="0px" y="0px">
                                    <path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z"
                                          transform="translate(50.000000, 50.000000) rotate(-90.000000) translate(-50.000000, -50.000000) "/>
                                </svg>
                            </a>
                            <a class="next" onclick="plusStaffSlides(1)">
                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     viewBox="0 0 100 100" version="1.1" x="0px" y="0px">
                                    <path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z"
                                          transform="translate(50.000000, 50.000000) rotate(90.000000) translate(-50.000000, -50.000000) "/>
                                </svg>
                            </a>
                        </div>
                        <div class="text-center ThumbrnailContainer">
                            @if(!empty($staffs))
                                @foreach($staffs as $staff)
                                    <div class="RightSlideText cursor text-center " onclick="currentStaffSlide({{$loop->iteration}})" >
                                        <h3 class="text-capitalize SlideName">
                                            {{(!empty($staff->name) && !empty($staff->surname)) ? $staff->name.' '.$staff->surname : ''}}
                                        </h3>
                                        <a href="{{route('site.single.staff', $staff->id)}}">
                                            <p class="text-uppercase Profession">
                                                {{!empty($staff->position) ? $staff->position : ''}}
                                            </p>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div><!-- .RightContent-->
                </section>
            </div><!-- .row -->
        </div><!--.Container -->
    </div>
</div><!-- .Spcialist-->