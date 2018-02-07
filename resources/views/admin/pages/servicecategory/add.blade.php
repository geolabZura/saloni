@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Service Categories
            <small>Add, Delete, Edit</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">

            <div class="col-md-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 2px !important; padding-right: 2px !important;">
                    <a href="{{route('admin.category')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-plus"></i>  Show Service Category List
                        </button>
                    </a>
                </div>
                <br/>
                <br/>


                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Add Service Category</h3>
                    </div>

                    <div class="box-body">

                        <div class="serviceAdd">
                            <form method="post" action="{{route('admin.category.add')}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="serviceName">Service Category Name</label>
                                    <input type="text" class="form-control" id="serviceName" name="name" placeholder="Service Name">
                                </div>

                                <div class="form-group">
                                    <label for="servicePrice">Service Category Price</label>
                                    <input type="text" class="form-control" id="servicePrice" name="price" placeholder="Service Price">
                                </div>

                                <button class="btn btn-block btn-success btn-flat">Success</button>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection