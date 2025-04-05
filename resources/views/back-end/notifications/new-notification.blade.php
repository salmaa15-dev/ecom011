<?php $notification = Auth::user()->notifications?>
@extends('layouts.back-end')
@section('content')
<div class="card">
    <div class="card-body">            
        <p class="text-muted mb-4">You can see all notifications  ({{ $notification->count() }})</p>
        @forelse ($notifications as $notif)
            <strong class="text-{{ $notif->type == Constant::NotificationType ? 'info': 'dark' }} f-25 float-right">
               Notification at ({{$notif->created_at->diffForHumans()}})
            </strong>
            <br>
            <div style="box-shadow: 7px 6px 12px -4px;" class="alert icon-custom-alert alert-outline-{{ $notif->type == Constant::NotificationType ? 'info': 'dark' }} alert-success-shadow">
                <span aria-hidden="true"><i class="mdi mdi-{{ $notif->type == Constant::NotificationType ? 'cart-outline' : 'message'}} alert-icon"></i></span>
                <div class="alert-text">
                    <strong>{{ $notif->data['name'] }}</strong>
                    <a href="mailto:{{  $notif->data['email'] }}" class="badge badge-pill badge-dark mb-3">{{ $notif->data['email'] }}</a>
                    <br>
                    @if ($notif->type == Constant::NotificationType)
                        Total orders: {{$notif->data['total_orders']}} {{ $currency }} <i class="fas fa-check"></i>
                    @else
                        <strong>Subject: </strong> {{ $notif->data['subject'] }}
                        <br>
                       <strong> Message: </strong>{{ $notif->data['message'] }}
                    @endif
                </div>                                       
            </div>
            @empty
            <h4 class="text-center">No Notifications</h4>
        @endforelse                                        
    </div><!--end card-body-->
</div>
@endsection