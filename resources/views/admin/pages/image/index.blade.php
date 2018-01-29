@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Edit Background Images
            <small></small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3>Edit Image</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.image.edit')}}" enctype="multipart/form-data">

                            {{csrf_field()}}

                            @if(!empty($images))
                                @foreach($images as $image)

                                    <div class="form-group">
                                        <label>

                                            Upload
                                            @php($title = explode('_',$image->position_name))

                                            @foreach($title as $item)
                                                {{ucfirst($item).' '}}
                                            @endforeach

                                        </label>

                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-primary btn-file">
                                                    Browse… <input type="file" id="homePage" name="{{$image->position_name}}" class="add-photo">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly name="readonly_{{$image->position_name}}" value="{{$image->image}}">
                                        </div>
                                        <img src="" class="show">
                                    </div>

                                @endforeach
                            @endif

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
                // console.log($(this).parent().parent().parent().find('.show'));
                // $(this).parent().parent().parent().find('.show').attr('src', URL.createObjectURL(event.target.files[0]));
            });
        })();
    </script>
@endsection