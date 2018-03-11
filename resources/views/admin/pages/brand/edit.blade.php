@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Brand
            <small>Add, Delete, Edit</small>
        </h1>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <a href="{{route('admin.brand')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-arrow-circle-left"></i> Go Back Special Offer List Page
                        </button>
                    </a>
                </div>
                <br/>
                <br/>

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Brand Edit</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.brand.edit', $brand->id)}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse… <input type="file" id="imageEdit" name="image" class="add-photo">
                                        </span>
                                    </span>

                                    <input type="text" class="form-control"  readonly name="readonly_edit_image" value="{{$brand->image}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="editTitle" value="{{$brand->title}}">
                            </div>

                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" type="text" name="editLink" value="{{$brand->link}}">
                            </div>

                            <div class="form-group">
                                <label for="staffDescription">Brand Description</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'description', 'about_us_text'=>$brand->description])
                            </div>

                            <div class="col-md-12" style="padding-left: 2px !important; padding-right: 2px !important;">
                                <button class="btn btn-block btn-success btn-flat"> Upload Edited Item</button>
                            </div>

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