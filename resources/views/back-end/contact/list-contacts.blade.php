@extends('layouts.back-end')
@section('content')
<div class="card">
    <div class="card-body">        
        <h4 class="mt-0 header-title text-center">All contacts</small></h4>
        @foreach ($contacts as $contact)
            <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                <div class="toast-header">
                    <a href="mailto:{{ $contact->email }}" class="badge badge-pill badge-info">{{ $contact->email }}</a>
                    <form action="{{ route('admin.notification', ['id' => $contact->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                    </form>
                </div>
                
                <div class="toast-body">
                    <strong>Name:</strong>
                    <strong class="text-info">{{ $contact->name }}</strong>
                    <br>
                    <strong>Subject:</strong>
                    {{ $contact->subject }}
                    <br>
                    <strong>Message:</strong>
                    {{ $contact->message }}
                    <br>
                    <small class="float-right badge badge-pill badge-dark mb-3">{{ Carbon\Carbon::parse($contact->created_at)->toFormattedDateString() }}</small>
                </div>
            </div> <!--end toast-->
        @endforeach
        <div class="d-flex">
            <div class="mx-auto">
                {{$contacts->links("pagination::bootstrap-4")}}
            </div>
        </div>
    </div><!--end card-body-->
</div>
@endsection