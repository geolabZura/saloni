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

                        <form method="post" action="{{route('admin.map.update')}}" >

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="lang">Lang</label>
                                <input type="text" class="form-control" value="" id="lang" name="lang" placeholder="Lang">
                            </div>

                            <div class="form-group">
                                <label for="lat">Lat</label>
                                <input type="text" class="form-control" value="" id="lat" name="lat" placeholder="Lat">
                            </div>

                            <div class="form-group">
                                <label for="hint">City Name</label>
                                <input type="text" class="form-control" value="" id="hint" name="hint" placeholder="City Name">
                            </div>

                            <div class="form-group">
                                <label for="balloon">City Balloon</label>
                                <input type="text" class="form-control" value="" id="balloon" name="balloon" placeholder="City Balloon">
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Success</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection