@extends('index')
@section('content')
    <div class="Filter height">
        <div class="container-fluid BrandsPage ">
            <div class="row">
                <div class="col-md-11 staffContainer TopFilter clearfix">
                    <h2 class="text-left text-uppercase Title"> нашы бренды</h2>

                    @if(!empty($brands))
                        @foreach($brands as $brand)
                            <div class="StaffCard">
                                <svg class="Logo" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 501.4 234.7" enable-background="new 0 0 501.4 234.7" xml:space="preserve">
                                <path  d="M286,43.4L332.4,96c0.8,0.9,1.7,1.2,2.8,1.2c0.9,0,1.7-0.1,2.5-0.7c1.5-1.4,1.9-3.3,0.6-4.8L296,43.9
                                l41.3-36.8c1.5-1.4,1.5-3.5,0-4.8c-1.3-1.2-3.8-1.3-5.2,0L286,43.4z"/>
                                    <path  d="M179.1,95.5c-0.2,0.3-0.6,0.4-0.8,0.6c-0.9,0.8-2.1,1.2-3.6,1.2c-2.6,0-4.7-1.5-4.7-3.3V44.5
                                c0-1.8,2.1-2.2,4.7-2.2c2.4,0,4.5,0,4.5,1.8v39.6L259,2.7c1.3-1.5,4.3-1.8,6.4-0.8c1.7,1,1.7,2.2,1.7,3.7V94c0,1.8-2.1,3.3-4.5,3.3
                                c-2.4,0-4.5-1.5-4.5-3.3V15.1L179.1,95.5z"/>
                                    <path  d="M180.5,5.2c0-0.5-0.3-1.8-0.7-2.3c-0.3-0.4-0.7-0.7-1.1-1.1c-1.8-1-4.4-0.7-5.5,0.8l-40.4,47.5L92.3,2.6
                                c-1.3-1.5-3.8-1.8-5.5-0.8c-1.2,0.7-2,1.6-2,2.9V94c0,1.8,1.8,3.3,4.1,3.3c2.1,0,3.9-1.5,3.9-3.3V14.8l36.5,42.7
                                c0.8,1.1,2,1.5,3.4,1.5h0.3c1.1,0,2.4-0.5,3.3-1.5L180.5,5.2z"/>
                                    <path  d="M346.5,49.3L346.5,49.3c0,26.9,23.8,48.7,53.1,48.7c12.5,0,24.1-4,32.9-10.5c1.6-1.1,1.9-3.6,0.4-4.8
                                c-1-1.7-3.4-1.9-5.1-0.8c-7.6,6.1-17.5,9.4-28.3,9.4c-25.5,0-45.9-18.9-45.9-41.9c0-23.6,20.4-42.5,45.9-42.5
                                c10.8,0,20.7,3.6,28.6,9.4c1.5,1.1,3.8,1,5-0.7c1.3-1.2,1-3.6-0.6-4.8C423.6,4.1,412.1,0,399.6,0C370.2,0.1,346.5,21.8,346.5,49.3"
                                    />
                                    <text transform="matrix(1 0 0 1 38.7145 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                                    <text transform="matrix(1 0 0 1 52.8131 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">л</text>
                                    <text transform="matrix(1 0 0 1 69.195 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">у</text>
                                    <text transform="matrix(1 0 0 1 83.9225 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">б </text>
                                    <text transform="matrix(1 0 0 1 108.6281 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                                    <text transform="matrix(1 0 0 1 122.7272 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                                    <text transform="matrix(1 0 0 1 141.1496 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">а</text>
                                    <text transform="matrix(1 0 0 1 157.2956 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">с</text>
                                    <text transform="matrix(1 0 0 1 171.6999 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                                    <text transform="matrix(1 0 0 1 190.1569 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">т</text>
                                    <text transform="matrix(1 0 0 1 201.9782 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">ы </text>
                                    <text transform="matrix(1 0 0 1 230.3961 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">&amp; </text>
                                    <text transform="matrix(1 0 0 1 260.1857 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">к</text>
                                    <text transform="matrix(1 0 0 1 274.2848 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">у</text>
                                    <text transform="matrix(1 0 0 1 289.0119 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                                    <text transform="matrix(1 0 0 1 307.4342 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                                    <text transform="matrix(1 0 0 1 325.8918 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                                    <text transform="matrix(1 0 0 1 344.3141 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">т </text>
                                    <text transform="matrix(1 0 0 1 362.7702 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">в </text>
                                    <text transform="matrix(1 0 0 1 385.0251 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">г</text>
                                    <text transform="matrix(1 0 0 1 395.797 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                                    <text transform="matrix(1 0 0 1 414.2541 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">р</text>
                                    <text transform="matrix(1 0 0 1 432.6764 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">о</text>
                                    <text transform="matrix(1 0 0 1 451.1339 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">д</text>
                                    <text transform="matrix(1 0 0 1 468.34 150.7278)"  font-family="'YuGothicUI-Light'" font-size="34.59">е</text>
                                    <path fill-rule="evenodd" clip-rule="evenodd"  d="M0,187.9c172.9-28.6,282,91.7,501.4,19.5
                                    C438,230,405.6,235.7,335,234.5C194,232.2,131,169.6,0,187.9"/>
                                </svg>
                                <a href="{{$brand->link}}" style="text-decoration: none;">
                                    <p class="card-text BrandTitle text-center">
                                        {{$brand->title}}
                                    </p>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection