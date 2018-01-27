@if(\Session::has('message') || $errors->any())

    @if(\Session::has('message'))
        @php($message = \Session::get('message'))
    @endif

    @if(!empty($message['error']) || $errors->any())
        <br/>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
            @if(!empty($message['error']))
                @foreach($message['error'] as $error)
                    {!! $error."<br/>" !!}
                @endforeach
            @endif

            @if($errors->any())
                @foreach($errors->all() as $error)
                    {!! $error."<br/>" !!}
                @endforeach
            @endif
        </div>
    @endif

@endif