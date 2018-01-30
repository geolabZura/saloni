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
                        <h3 class="box-title">Staff Add</h3>
                    </div>

                    <div class="box-body">

                        <button type="button" class="btn btn-default btn-block btn-info" id="addStaff">Hide Add Content</button>
                        <br/>

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
                                            <td style="display: none;" class="staff_id">{{$staff->id}}</td>
                                            <td class="staff_image"><img src="{{asset('/image/'.$staff['image'])}}" width="100" height="100"></td>
                                            <td class="staff_name">{{$staff->name}}</td>
                                            <td class="staff_surname">{{$staff->surname}}</td>
                                            <td class="staff_position">{{$staff->position}}</td>
                                            <td class="staff_description">{{$staff->description}}</td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit" data-id="{{$staff->id}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{$staff->id}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>

                            </table>

                            <div class="clearfix"></div>

                            <div class="pull-right">
                                @if(!empty($staffs))
                                    {!! $staffs->render() !!}
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="edit" role="dialog" tabindex="-1" aria-labelledby="edit" aria-hidden="true" style="overflow:hidden;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="{{route('admin.staff.edit')}}" enctype="multipart/form-data">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="editId">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <span class="btn btn-primary btn-file">
                                                Browse… <input type="file" id="imageEdit" name="image" class="add-photo">
                                            </span>
                                        </span>

                                        <input type="text" class="form-control"  readonly name="readonly_edit_image" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="editName">
                                </div>

                                <div class="form-group">
                                    <label>Surname</label>
                                    <input class="form-control" type="text" name="editSurname">
                                </div>

                                <div class="form-group">
                                    <label>Position</label>
                                    <input class="form-control" type="text" name="editPosition">
                                </div>

                                <div class="form-group">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="editDescription">
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
        $('#addStaff').click(function(){
            $('.staffAdd').fadeToggle();
        });

        $('#image').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });

        $('.edit').click(function(){
            var mainElement = $(this).parent().parent().parent();
            var staffId = mainElement.find('.staff_id').text();
            var staffName = mainElement.find('.staff_name').text();
            var staffSurname = mainElement.find('.staff_surname').text();
            var staffPosition = mainElement.find('.staff_position').text();
            var staffDescription = mainElement.find('.staff_description').text();
            var tmppath = mainElement.find('.staff_image img').attr('src');

            $("input[name=editId]").val(staffId);
            $("input[name=editName]").val(staffName);
            $("input[name=editSurname]").val(staffSurname);
            $("input[name=editPosition]").val(staffPosition);
            $("input[name=editDescription]").val(staffDescription);
            $("input[name=readonly_edit_image]").val(tmppath);

        });

        $('#imageEdit').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });

        $('.delete').click(function(){
            $('#deleteUrl').attr('href', "/admin/staff/delete/"+$(this).parent().data('id'));
        });

    </script>
@endsection