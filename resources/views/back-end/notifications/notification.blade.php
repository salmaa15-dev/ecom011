@extends('layouts.back-end')
@section('content')
<div class="card">
    <div class="card-body">
        <strong class="text-{{ $notification->type == Constant::NotificationType ? 'success': 'dark' }} f-25 float-right">
            Notification at ({{$notification->created_at->diffForHumans()}})
        </strong>
        <br>
        <div style="box-shadow: 7px 6px 12px -4px;" class="alert icon-custom-alert alert-outline-{{ $notification->type == Constant::NotificationType ? 'success': 'dark' }} alert-success-shadow">
            <span aria-hidden="true"><i class="mdi mdi-{{ $notification->type == Constant::NotificationType ? 'cart-outline' : 'message'}} alert-icon"></i></span>
            <div class="alert-text">
                <strong>{{ $notification->data['name'] }}</strong>
                <a href="mailto:{{  $notification->data['email'] }}" class="badge badge-pill badge-dark mb-3">{{ $notification->data['email'] }}</a>
                <br>
                @if ($notification->type == Constant::NotificationType)
                    Total orders: {{$notification->data['total_orders']}} {{ $currency }}<i class="fas fa-check"></i>
                @else
                    <strong>Subject: </strong> {{ $notification->data['subject'] }}
                    <br>
                    <strong> Message: </strong>{{ $notification->data['message'] }}
                @endif
            </div>                                       
        </div>                   
    </div><!--end card-body-->
</div>
@endsection