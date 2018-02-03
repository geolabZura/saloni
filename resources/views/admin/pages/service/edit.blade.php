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
                        <h3 class="box-title">Edit Services</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.service.edit', $service->id)}}" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" type="text" name="editTitle" value="{{$service->title}}">
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Browse… <input type="file" id="imageEdit" name="image" class="add-photo">
                                        </span>
                                    </span>

                                    <input type="text" class="form-control"  readonly name="readonly_edit_image" value="{{$service->image}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="serviceCategory">Services Category</label>
                                <select name="category[]" id="serviceCategory" class="form-control select2 select2-hidden-accessible" tabindex="-1" multiple="" data-placeholder="" style="width: 100%;" aria-hidden="true">

                                    {{--$service->categories--}}
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{in_array($category->id, $service_category) ? "selected" : ""}}>{{$category->name.'/'.$category->price}}</option>
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
    </script>
@endsection