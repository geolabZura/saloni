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

                @include('admin.partials.error')

                @include('admin.partials.success')

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
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection