@if(session()->has('success'))

<div class="alert alert-success alert-dismissible fade show text-center" role="alert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true"><i class="mdi mdi-close"></i></span>

    </button>

    {!! session('success') !!}

</div>

@endif