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

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Add Services</h3>
                    </div>

                    <div class="box-body">

                        <button type="button" class="btn btn-default btn-block btn-info" id="addService">Hide Add Content</button>
                        <br/>

                        <div class="serviceAdd">
                            <form method="post" action="{{route('admin.service.add')}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="serviceName">Service Name</label>
                                    <input type="text" class="form-control" id="serviceName" name="name" placeholder="Service Name">
                                </div>

                                <div class="form-group">
                                    <label for="servicePrice">Service Price</label>
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
                        <h3 class="box-title">Show All Services</h3>
                        <small>Edit/Delete Services</small>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">

                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="checkthis" /></td>
                                        <td>Mohsin</td>
                                        <td>Irshad</td>
                                        <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                        <td>isometric.mohsin@gmail.com</td>
                                        <td>+923335586757</td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                    </tr>
                                </tbody>

                            </table>

                            <div class="clearfix"></div>

                            {{--<ul class="pagination pull-right">--}}
                                {{--<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>--}}
                                {{--<li class="active"><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">4</a></li>--}}
                                {{--<li><a href="#">5</a></li>--}}
                                {{--<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>--}}
                            {{--</ul>--}}

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
                            <div class="form-group">
                                <input class="form-control " type="text" placeholder="Mohsin">
                            </div>
                            <div class="form-group">

                                <input class="form-control " type="text" placeholder="Irshad">
                            </div>
                            <div class="form-group">
                                <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
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
                            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
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
                elem.toggle();
            });
        })();
    </script>
@endsection
