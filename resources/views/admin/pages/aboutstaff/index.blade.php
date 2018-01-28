@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            About Staff
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
                        <form method="post" action="{{route('admin.aboutstaff.edit')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="aboutStaffTitle">About Us Title</label>
                                <input type="text" class="form-control" id="aboutStaffTitle" name="title" placeholder="About Staff Title" value="{{(isset($about_staff['title']) ? $about_staff['title'] : '')}}">
                            </div>

                            <div class="form-group">
                                <label for="aboutStaffDescription">About Staff Description</label>
                                <input type="text" class="form-control" id="aboutStaffDescription" name="description" placeholder="About Staff Description" value="{{isset($about_staff['description']) ? $about_staff['description'] : ''}}">
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
@endsection
