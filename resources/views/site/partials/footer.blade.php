<aside class="Footer container-fluid">
    <div class="row text-center">
        @if(!empty($contact))
            <div class="col-sm-4 FooterTride">
                <span>{{$contact->city}}</span>
            </div>
            <div class="col-sm-4 FooterTride">
                <span>{{$contact->telephone}}</span>
            </div>
            <div class="col-sm-4 FooterTride">
                <span>Ежедневно с {{$contact->work_from}} до {{$contact->work_to}}</span>
            </div>
        @endif
    </div>
</aside>