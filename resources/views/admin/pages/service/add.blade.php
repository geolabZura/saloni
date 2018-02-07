@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Services
            <small>Add, Delete, Edit</small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 0 !important; padding-right: 0 !important;">
                    <a href="{{route('admin.service')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-arrow-circle-left"></i>  Go Back Service List Page
                        </button>
                    </a>
                </div>
                <br/>
                <br/>

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Add Services</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.service.add')}}" enctype="multipart/form-data" class="serviceAdd">

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
                            </div>

                            <div class="form-group">
                                <label for="serviceTitle">Staff Title</label>
                                <input type="text" class="form-control" id="serviceTitle" name="title"  value="">
                            </div>

                            <div class="form-group" >
                                <label for="serviceCategory">Services Category</label>
                                <select name="category[]" id="serviceCategory" class="form-control select2 select2-hidden-accessible" tabindex="-1" multiple="" data-placeholder="" style="width: 100%;" aria-hidden="true">
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"> {{$category->name.'/'.$category->price}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $('#serviceCategory').select2();

        $('#image').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });
    </script>
@endsection