@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Special Offer Us
            <small>Add, Edit, Delete</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')


                <div class="col-md-4" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <a href="{{route('admin.offer')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-arrow-circle-left"></i>  Go Back Special Offer List Page
                        </button>
                    </a>
                </div>
                <br/>
                <br/>

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Add Special Offer Item</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.offer.add')}}" enctype="multipart/form-data" class="offerAdd">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>
                                    Upload Special Special Offer Image
                                </label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse… <input type="file" id="image" name="image" class="add-photo">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" readonly name="readonly_image" value="">
                                </div>
                                <img src="" class="show">
                            </div>

                            <div class="form-group">
                                <label for="offerUsTitle">Special Offer Us Title</label>
                                <input type="text" class="form-control" id="offerUsTitle" name="title" placeholder="Special Offer Us Title" value="{{(isset($offer_us['title'])) ? $offer_us['title'] : ''}}">
                            </div>

                            <div class="form-group">
                                <label for="offerUsText">Special Offer Us Description</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'description', 'about_us_text'=>''])
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Add New Special Offer Item</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.wysihtml5-toolbar').css({'display':'none'});

        $('#image').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });
        
    </script>
@endsection