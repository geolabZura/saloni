<div class="row justify-content-center">
    <section class="col-md-8 col-sm-12 HeaderContent text-center">
        <h1 class="text-uppercase Title">{!! (!empty($about_us) && !empty($about_us->title)) ? $about_us->title : '' !!}</h1>

        <p class="HeaderContentText" id="Short">
            {{ (!empty($about_us) && !empty($about_us->description)) ? $about_us->description : ''}}
        </p>

        <div class="HeaderContentText" id="Long">
            {!! (!empty($about_us) && !empty($about_us->text)) ? $about_us->text : '' !!}
        </div>

        <button  class="text-uppercase button" id="headerButton" onclick="seeMore()">подробнее</button>
    </section>
</div><!-- .row -->
