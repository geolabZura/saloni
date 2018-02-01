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
                        <h3 class="box-title">Staff Add</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.staff.add')}}" enctype="multipart/form-data" class="staffAdd">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label>
                                    Upload Staff Image
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
                                <label for="staffName">Staff Name</label>
                                <input type="text" class="form-control" id="staffName" name="name"  value="">
                            </div>


                            <div class="form-group">
                                <label for="staffSurname">Staff Surname</label>
                                <input type="text" class="form-control" id="staffSurname" name="surname"  value="">
                            </div>

                            <div class="form-group">
                                <label for="staffPosition">Staff Position</label>
                                <input type="text" class="form-control" id="staffPosition" name="position"  value="">
                            </div>

                            <div class="form-group">
                                <label for="staffDescription">Staff Description</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'description', 'about_us_text'=>''])
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