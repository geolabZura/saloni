@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Gallery
            <small>Add, Delete</small>
        </h1>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <a href="{{route('admin.gallery')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-arrow-circle-left"></i> Go Back Gallery Images List
                        </button>
                    </a>

                </div>
                <br>
                <br>

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Image Add</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.gallery.add')}}" enctype="multipart/form-data" class="brandAdd">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label>
                                    Upload Image Image
                                </label>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse… <input type="file" id="image" name="image" class="add-photo">
                                        </span>
                                    </span>
                                    <input type="text" class="form-control col-md-8" readonly name="readonly_image" value="">
                                </div>
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        (function() {
            $('.add-photo').change(function(){
                var tmppath = $(this).val()
                $(this).parent().parent().next().val(tmppath);
            });
        })()
    </script>
@endsection