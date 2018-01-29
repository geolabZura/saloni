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

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Add Service Category</h3>
                    </div>

                    <div class="box-body">

                        <button type="button" class="btn btn-default btn-block btn-info" id="addService">Hide Add Content</button>
                        <br/>

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

            <div class="col-xs-12">

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Show All Services Category</h3>
                        <small>Edit/Delete Category</small>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">

                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>
                                    <th>Service Category Name</th>
                                    <th>Service Category Price</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>

                                <tbody>
                                    @if(!empty($services))
                                        @foreach($services as $service)
                                            <tr>
                                                <td style="display: none;" class="service_id">{{$service->id}}</td>
                                                <td class="service_name">{{$service->name}}</td>
                                                <td class="service_price">{{$service->price}}</td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Edit" data-id="{{$service->id}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                                <td><p data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{$service->id}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>

                            </table>

                            <div class="clearfix"></div>

                            <div class="pull-right">
                                @if(!empty($services))
                                    {!! $services->render() !!}
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="{{route('admin.category.edit')}}">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="editId">
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" name="editName">
                                </div>

                                <div class="form-group">

                                    <input class="form-control" type="text" name="editPrice">
                                </div>

                                <div class="modal-footer ">
                                    <button class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                </div>
                            </form>

                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>



            <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                        </div>
                        <div class="modal-body">

                            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                        </div>
                        <div class="modal-footer ">
                            <a id="deleteUrl" style="text-decoration: none" href=""><button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button></a>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
        (function(){
            $('#addService').click(function(){
                var elem = $('.serviceAdd');
                elem.fadeToggle();
            });

            $('.edit').click(function(){
                var mainElement = $(this).parent().parent().parent();
                var serviceName = mainElement.find('.service_name').text();
                var servicePrice = mainElement.find('.service_price').text();
                var serviceId = mainElement.find('.service_id').text();

                $("input[name=editId]").val(serviceId);
                $("input[name=editName]").val(serviceName);
                $("input[name=editPrice]").val(servicePrice);
            })


            $('.delete').click(function(){
                $('#deleteUrl').attr('href', "/admin/category/delete/"+$(this).parent().data('id'));
            });
        })();
    </script>
@endsection
