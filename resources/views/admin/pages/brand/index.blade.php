@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Brand
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
                        <h3 class="box-title">Brand Add</h3>
                    </div>

                    <div class="box-body">

                        <button type="button" class="btn btn-default btn-block btn-info" id="addBrand">Hide Add Content</button>
                        <br/>

                        <form method="post" action="{{route('admin.brand.add')}}" enctype="multipart/form-data" class="brandAdd">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label>
                                    Upload Brand Image
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
                                <label for="brandTitle">Brand Title</label>
                                <input type="text" class="form-control" id="brandTitle" name="title"  value="">
                            </div>

                            <div class="form-group">
                                <label for="brandLink">Brand Link</label>
                                <input type="text" class="form-control" id="brandLink" name="link"  value="">
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>

                    </div>
                </div>
            </div>

            <div class="col-xs-12">

                <div class="box box-info">

                    <div class="box-header">
                        <h3 class="box-title">Show All Brand</h3>
                        <small>Edit/Delete Brand</small>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">

                            <table id="mytable" class="table table-bordred table-striped">

                                <thead>
                                <th>Brand Image</th>
                                <th>Brand Title</th>
                                <th>Brand Link</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                </thead>

                                <tbody>
                                @if(!empty($brands))
                                    @foreach($brands as $brand)
                                        <tr>
                                            <td style="display: none;" class="brand_id">{{$brand->id}}</td>
                                            <td class="brand_image"><img src="{{asset('/image/'.$brand['image'])}}" width="100" height="100"></td>
                                            <td class="brand_title">{{$brand->title}}</td>
                                            <td class="brand_link">{{$brand->link}}</td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit" data-id="{{$brand->id}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{$brand->id}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>

                            </table>

                            <div class="clearfix"></div>

                            <div class="pull-right">
                                @if(!empty($brands))
                                    {!! $brands->render() !!}
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

                            <form method="post" action="{{route('admin.brand.edit')}}" enctype="multipart/form-data">

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
                                    <label>Title</label>
                                    <input class="form-control" type="text" name="editTitle">
                                </div>

                                <div class="form-group">
                                    <label>Link</label>
                                    <input class="form-control" type="text" name="editLink">
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
        $('#addBrand').click(function(){
            $('.brandAdd').fadeToggle();
        });

        $('#image').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });


        $('.edit').click(function(){
            var mainElement = $(this).parent().parent().parent();
            var brandId = mainElement.find('.brand_id').text();
            var brandTitle = mainElement.find('.brand_title').text();
            var brandLink = mainElement.find('.brand_link').text();
            var tmppath = mainElement.find('.brand_image img').attr('src');

            $("input[name=editId]").val(brandId);
            $("input[name=editTitle]").val(brandTitle);
            $("input[name=editLink]").val(brandLink);
            $("input[name=readonly_edit_image]").val(tmppath);

        });

        $('#imageEdit').change(function(){
            var tmppath = $(this).val();
            $(this).parent().parent().next().val(tmppath);
        });

        $('.delete').click(function(){
            $('#deleteUrl').attr('href', "/admin/brand/delete/"+$(this).parent().data('id'));
        });

    </script>

@endsection