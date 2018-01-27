@if(\Session::has('message'))

    @php($message = \Session::get('message'))

    @if(!empty($message['success']))

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Alert!</h4>
            @foreach($message['success'] as $success)
                {!! $success."<br/>" !!}
            @endforeach
        </div>
    @endif

@endif
