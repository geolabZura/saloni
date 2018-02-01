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

            <div class="col-md-4" style="padding-left: 2px !important; padding-right: 2px !important;">
                <a href="{{route('admin.brand.add')}}">
                    <button type="button" class="btn btn-block btn-primary btn-flat">
                        <i class="fa  fa-plus"></i> Add New Brand
                    </button>
                </a>
            </div>
            <br/>
            <br/>

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
                                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{route('admin.brand.edit',$brand->id)}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                                        <td><p class="delete" data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{route('admin.brand.delete',$brand->id)}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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

        $('.delete').click(function(){
            $('#deleteUrl').attr('href', $(this).data('id'));
        });

    </script>

@endsection