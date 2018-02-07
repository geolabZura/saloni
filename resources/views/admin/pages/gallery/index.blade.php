@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Image Gallery
            <small>Add, Delete</small>
        </h1>
    </section>

    <section class="content">

        <div class="row">
            <div class="col-md-12">


                @include('admin.partials.error')

                @include('admin.partials.success')

                <div class="col-md-4" style="padding-left: 2px !important; padding-right: 2px !important;">
                    <a href="{{route('admin.gallery.add')}}">
                        <button type="button" class="btn btn-block btn-primary btn-flat">
                            <i class="fa  fa-plus"></i> Add New Gallery IMage
                        </button>
                    </a>
                </div>

            </div>
        </div>

        <div class="container gal-container">
            @foreach($images as $image)
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#2">
                            <img src="{{asset('/image/'.$image->image)}}">
                        </a>

                        <div class="modal fade" id="2" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset('/image/'.$image->image)}}">

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 0 !important;">

                        <p class="delete" data-placement="top" data-toggle="tooltip" title="Delete" data-id="{{route('admin.gallery.delete', $image->id)}}">
                            <button type="button" class="btn btn-block btn-danger btn-flat" data-title="Delete" data-toggle="modal" data-target="#delete" >Delete Image</button>
                        </p>
                    </div>
                </div>
            @endforeach
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
    </section>

    <script>
        $('.delete').click(function(){
            $('#deleteUrl').attr('href', $(this).data('id'));
        });
    </script>
@endsection
