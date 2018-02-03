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

            <div class="col-xs-12">

                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 2px !important; padding-right: 2px !important;">
                    <a href="{{route('admin.service.add')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-plus"></i> Add New Service
                        </button>
                    </a>
                </div>
                <br/>
                <br/>

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
                                            <td class="service_image"><img src="{{asset('/image/'.$service['image'])}}" style="width:100px; height:auto;"></td>
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
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="{{route('admin.service.edit',$service->id)}}"><button class="btn btn-primary btn-xs edit" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                                            <td><p class="delete" data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{route('admin.service.delete', $service->id)}}"><button class="btn btn-danger btn-xs delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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

            $('.delete').click(function(){
                $('#deleteUrl').attr('href', $(this).data('id'));
            });

        })();
    </script>

@endsection