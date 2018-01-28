@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            About Us
            <small>Add, Edit, Delete</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title"></h3>
                    </div>

                    <div class="box-body">
                        <form method="post" action="{{route('admin.aboutus.edit')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="aboutUsTitle">About Us Title</label>
                                <input type="text" class="form-control" id="aboutUsTitle" name="title" placeholder="About Us Title" value="{{$about_us['title']}}">
                            </div>

                            <div class="form-group">
                                <label for="aboutUsDescription">About Us Description</label>
                                <input type="text" class="form-control" id="aboutUsDescription" name="description" placeholder="About Us Description" value="{{$about_us['description']}}">
                            </div>

                            <div class="form-group">
                                <label for="aboutUsText">About Us Text</label>
                                @include('admin.partials.wysiwyg', ['about_us_text_name'=>'text', 'about_us_text'=>"{$about_us['text']}"])
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script>
        (function(){
            $('.wysihtml5-toolbar').css({'display':'none'});
        })();
    </script>
@endsection