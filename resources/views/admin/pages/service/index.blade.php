@extends('admin.index')
@section('content')
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

                        <button type="button" class="btn btn-default btn-block btn-info" id="addService">Hide Add Content</button>
                        <br/>

                        <form method="post" action="{{route('admin.service.add')}}" enctype="multipart/form-data" class="serviceAdd">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label>
                                    Upload Service Image
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
                                <label for="serviceTitle">Service Title</label>
                                <input type="text" class="form-control" id="serviceTitle" name="title"  value="">
                            </div>

                            <div class="form-group" >
                                <label for="serviceCategory">Services Category</label>
                                <select name="category[]" id="serviceCategory" class="form-control select2 select2-hidden-accessible" tabindex="-1" multiple="" data-placeholder="" style="width: 100%;" aria-hidden="true">
                                    @if(!empty($categories))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name.'/'.$category->price}}</option>
                                        @endforeach
                                    @endif
                                </select>
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
                                <th>Service Image</th>
                                <th>Service Title</th>
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


            <div class="modal fade" id="edit" role="dialog" tabindex="-1" aria-labelledby="edit" aria-hidden="true" style="overflow:hidden;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                            <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
                        </div>
                        <div class="modal-body">

                            <form method="post" action="{{route('admin.service.edit')}}">

                                {{ csrf_field() }}

                                <div class="form-group">
                                    <input class="form-control" type="hidden" name="editId">
                                </div>

                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="editTitle">
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

                                <div class="form-group" id="loadSelector">

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

            $('#serviceCategory').select2();

            $('#image').change(function(){
                var tmppath = $(this).val();
                $(this).parent().parent().next().val(tmppath);
            });


            $('.edit').click(function(){
                var mainElement = $(this).parent().parent().parent();
                var serviceName = mainElement.find('.service_title').text();
                var serviceId = mainElement.find('.service_id').text();
                var tmppath =mainElement.find('.service_image img').attr('src');

                $("input[name=editId]").val(serviceId);
                $("input[name=editTitle]").val(serviceName);
                $("input[name=readonly_edit_image]").val(tmppath);

                $('#loadSelector').load('/admin/service/selector/'+$(this).parent().data('id'));
            });

            $('.delete').click(function(){
                $('#deleteUrl').attr('href', "/admin/service/delete/"+$(this).parent().data('id'));
            });

            $('#imageEdit').change(function(){
                var tmppath = $(this).val();
                $(this).parent().parent().next().val(tmppath);
            });

        })();

    </script>

@endsection