@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Staff
            <small>Add, Delete, Edit</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <a href="{{route('admin.staff')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-arrow-circle-left"></i>  Go Back Staff List Page
                        </button>
                    </a>
                </div>
                <br/>
                <br/>

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Staff Edit</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.staff.edit', $staff->id)}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                Browse… <input type="file" id="image" name="image" class="add-photo">
                                            </span>
                                        </span>

                                    <input type="text" class="form-control"  readonly name="readonly_edit_image" value="{{$staff->image}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="editName" value="{{$staff->name}}">
                            </div>

                            <div class="form-group">
                                <label>Surname</label>
                                <input class="form-control" type="text" name="editSurname" value="{{$staff->surname}}">
                            </div>

                            <div class="form-group">
                                <label>Position</label>
                                <input class="form-control" type="text" name="editPosition" value="{{$staff->position}}">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'editDescription', 'about_us_text'=>$staff->description])

                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

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