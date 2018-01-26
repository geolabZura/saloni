@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Edit Social Icons
            <small></small>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3>Edit Icons</h3>
                    </div>

                    <div class="box-body">

                        <form method="post" action="{{route('admin.social.update')}}">

                            {{ csrf_field() }}

                            @if(!empty($social_icons))
                                @foreach($social_icons as $link)
                                    <div class="form-group">
                                        <label for="{{$link->site_name}}">{{ucfirst($link->site_name)}}</label>
                                        <input type="text" class="form-control" value="{{$link->link}}" id="{{$link->site_name}}" name="links[{{$link->site_name.$link->id}}]" placeholder="{{empty($link->link) ? ucfirst($link->site_name)." Link" : $link->link }}">
                                    </div>
                                @endforeach
                            @endif

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>

                        @if(!empty(\Session::has('message')))

                            @php($message = \Session::get('message'))

                            @if(!empty($message['error']))
                                <br/>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                                    @foreach($message['error'] as $error)
                                        {!! $error."<br/>" !!}
                                    @endforeach
                                </div>

                            @endif

                        @endif


                        @if(!empty(\Session::has('message')))

                            @php($message = \Session::get('message'))

                            @if(!empty($message['success']))
                                <br/>
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><i class="icon fa fa-check"></i> Alert!</h4>
                                    @foreach($message['success'] as $success)
                                        {!! $success."<br/>" !!}
                                    @endforeach
                                </div>
                            @endif

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection