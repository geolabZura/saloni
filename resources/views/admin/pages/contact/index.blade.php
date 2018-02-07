@extends('admin.index')
@section('content')
    <section class="content-header">
        <h1>
            Contact
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

                        <form method="post" action="{{route('admin.contact.update')}}" enctype="multipart/form-data">

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="serviceCategory">Services</label>
                                <select name="category[]" id="serviceCategory" class="form-control select2 select2-hidden-accessible" tabindex="-1" multiple="" data-placeholder="" style="width: 100%;" aria-hidden="true">
                                    @if(!empty($services))
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}" {{in_array($service->id, $service_id_array) ? "selected" : ""}}>{{$service->title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="city">City </label>
                                <input type="text" class="form-control" id="city" name="city"  value="{{!empty($contact->city) ? $contact->city : ''}}">
                            </div>

                            <div class="form-group">
                                <label for="tel"></label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="text" id="tel" class="form-control" name="telephone" data-inputmask="&quot;mask&quot;: &quot;9(999) 999-9999&quot;" data-mask="" value="{{!empty($contact->telephone) ? $contact->telephone : ''}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mail">Mail</label>
                                <input type="text" class="form-control" id="mail" name="mail"  value="{{!empty($contact->mail) ? $contact->mail : ''}}">
                            </div>

                            <div class="form-group">
                                <label for="timepicker2">Working Hours From</label>
                                <div class="input-group bootstrap-timepicker timepicker">
                                    <input id="timepicker1" type="text" class="form-control input-small" readonly name="start_from" value="{{!empty($contact->work_from) ? $contact->work_from : ''}}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="timepicker2">Working Hours To</label>
                                <div class="input-group bootstrap-timepicker timepicker">
                                    <input id="timepicker2" type="text" class="form-control input-small" readonly name="start_to" value="{{!empty($contact->work_to) ? $contact->work_to : ''}}">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                </div>
                            </div>

                            <button class="btn btn-block btn-success btn-flat">Update</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        //Timepicker
        $('#timepicker1, #timepicker2').timepicker({
            use24hours: true
        });

        $('[data-mask]').inputmask()


        $('#serviceCategory').select2();
    </script>
@endsection