@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Special Offer
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
                            <i class="fa  fa-arrow-circle-left"></i> Go Back Special Offer List Page
                        </button>
                    </a>
                </div>
                <br/>
                <br/>


                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Edit Special Offer Item</h3>
                    </div>


                    <div class="box-body">

                        <form method="post" action="{{route('admin.offer.edit', $offer->id)}}" enctype="multipart/form-data" class="offerAdd">
                            {{ csrf_field() }}

                            <input type="hidden" name="editId" value="{{$offer->id}}">

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
                                    <input type="text" class="form-control" readonly name="readonly_image" value="{{$offer->image}}">
                                </div>
                                {{--<img class="col-md-12" src="{{asset('image/'.$offer->image)}}" class="show">--}}
                            </div>

                            <div class="form-group">
                                <label for="offerUsTitle">Special Offer Us Title</label>
                                <input type="text" class="form-control" id="offerUsTitle" name="editTitle" placeholder="Special Offer Us Title" value="{{$offer->title}}">
                            </div>

                            <div class="form-group">
                                <label for="offerUsText">Special Offer Us Description</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'editDescription', 'about_us_text'=>$offer->description])
                            </div>

                            <div class="col-md-12" style="padding-left: 2px !important; padding-right: 2px !important;">
                                <button class="btn btn-block btn-success btn-flat"> Upload Edited Item</button>
                            </div>

                            {{--<div class="col-md-6" style="padding-left: 2px !important; padding-right: 2px !important;">--}}
                                {{--<button class="btn btn-block btn-success btn-flat">Edit Item And Redi rect Back</button>--}}
                            {{--</div>--}}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('.wysihtml5-toolbar').css({'display':'none'});

    </script>
@endsection