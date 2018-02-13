<div class="Gallery PageHeight Filter" id="GalleryID">
    <div class="container-fluid Filter">
        <div class="row justify-content-center">
            <div class="col-md-9  BigimageContainer">
                @if(!empty($gallery_images))
                    @foreach($gallery_images as $image)
                        @if($loop->iteration<4)
                            <div class="mySlides PageHeight" style="background-image: url({{asset('/image/'.$image->image)}});"></div>
                        @else
                            @break
                        @endif
                    @endforeach
                @endif
                <a class="prev" onclick="plusSlides(-1)">
                    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 100 100" version="1.1" x="0px" y="0px">
                        <path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z"
                              transform="translate(50.000000, 50.000000) rotate(-90.000000) translate(-50.000000, -50.000000) "/>
                    </svg>
                </a>
                <a class="next" onclick="plusSlides(1)">
                    <svg class="arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 100 100" version="1.1" x="0px" y="0px">
                        <path d="M68.232233,61.767767 C69.2085438,62.7440777 70.7914562,62.7440777 71.767767,61.767767 C72.7440777,60.7914562 72.7440777,59.2085438 71.767767,58.232233 L51.767767,38.232233 C50.7914562,37.2559223 49.2085438,37.2559223 48.232233,38.232233 L28.232233,58.232233 C27.2559223,59.2085438 27.2559223,60.7914562 28.232233,61.767767 C29.2085438,62.7440777 30.7914562,62.7440777 31.767767,61.767767 L49.9997921,43.5357418 L68.232233,61.767767 Z"
                              transform="translate(50.000000, 50.000000) rotate(90.000000) translate(-50.000000, -50.000000) "/>
                    </svg>
                </a>

            </div>

            <div class="col-md-3 text-center ThumbrnailContainer">
                <h2 class="text-uppercase Title">галерея</h2>
                @if(!empty($gallery_images))
                    @php($count = 1)
                    @foreach($gallery_images as $image)
                        @if($loop->iteration<4)
                            <div class="SmallImg cursor" style="background-image: url({{asset('/image/'.$image->image)}})" onclick="currentSlide({{$count}})"></div>
                            @php($count++)
                        @else
                            @break
                        @endif
                    @endforeach
                @endif
                <a href="#" class="text-uppercase GalleryButton button">все фотографии</a>
            </div>
        </div>
    </div>
</div><!-- .Gallery -->