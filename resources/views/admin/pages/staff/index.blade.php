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

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3>Staff Add</h3>
                    </div>

                    <div class="box-body">

                        <button type="button" class="btn btn-default btn-block btn-info" id="addService">Hide Add Content</button>
                        <br/>

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
                                <label for="staffDescription">Staff Position</label>
                                <input type="text" class="form-control" id="staffDescription" name="description"  value="">
                            </div>



                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>

                    </div>
                </div>
            </div>


            <div class="col-xs-12">

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Show All Services</h3>
                        <small>Edit/Delete Services</small>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">

                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>
                                <th>Staff Image</th>
                                <th>Staff Name</th>
                                <th>Staff Surname</th>
                                <th>Staff Position</th>
                                <th>Staff Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>

                                <tbody>
                                @if(!empty($staffs))
                                    @foreach($staffs as $staff)
                                        <tr>
                                            <td style="display: none;" class="service_id">{{$staff->id}}</td>
                                            <td class="service_image"><img src="{{asset('/image/'.$service['image'])}}" width="100" height="100"></td>
                                            <td class="service_title">{{$service->title}}</td>
                                            <td class="service_category_name">
                                                @foreach($service->categories as $category)
                                                    @php($collect_selected_category[$service->id][] = $category->id)
                                                    {{$category->name.', '}}
                                                @endforeach
                                            </td>
                                            <td class="service_category_price">
                                                @foreach($service->categories as $category)
                                                    {{$category->price.', '}}
                                                @endforeach
                                            </td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit" data-id="{{$service->id}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{$service->id}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>

                            </table>

                            <div class="clearfix"></div>

                            <div class="pull-right">
                                {{--@if(!empty($services))--}}
                                {{--{!! $services->render() !!}--}}
                                {{--@endif--}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
@endsection