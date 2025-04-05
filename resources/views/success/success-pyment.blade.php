@if(session()->has('success'))

<div class="pa-login-model pa-forgot-modal">

    <div class="modal fade" id="success">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <button type="button" class="pa-login-close close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

                <div class="modal-body">

                    <div class="pa-login-form">

                        <i class="fas fa-info-circle text-success"></i>  <strong style="text-shadow: 6px 8px 17px black;" class="font-weight-bold">{{ session('success') }} {{ session('data') }}</strong>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@section('success')

<script>

    $(document).ready(function(){

        $("#success").modal('show');

    });

</script>

@endsection

@endif