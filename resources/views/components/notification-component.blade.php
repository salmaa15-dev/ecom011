<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"

aria-haspopup="false" aria-expanded="false">

<i class="mdi mdi-bell-outline nav-icon"></i>

<span class="badge badge-danger badge-pill noti-icon-badge">{{ $notifications->count() }}</span>

</a>

<div class="dropdown-menu dropdown-menu-right dropdown-lg">

<!-- item-->

<h6 class="dropdown-item-text">

    @if($notifications->count())

        Notifications ({{ $notifications->count() }})

    @endif

</h6>

<div class="slimscroll notification-list">

    <!-- item-->

    @forelse ($notifications->take(5) as $notif)

        <a href="{{ route('admin.show_notification', ['notification_id' => $notif->id, 'type' => $notif->type]) }}" class="dropdown-item notify-item">

            <div class="notify-icon {{ $notif->type == Constant::NotificationType ? 'bg-success' : 'bg-danger'}}">

                <i class="mdi mdi-{{ $notif->type == Constant::NotificationType ? 'cart-outline' : 'message'}}"></i>

            </div>

            <p class="notify-details">{{ $notif->data['name'] }}

                <small class="text-success text-muted float-right">

                    {{$notif->created_at->diffForHumans()}}

                </small>

                @if ($notif->type == Constant::NotificationType)

                    <small class="text-success float-left">

                        Total orders: {{ $notif->data['total_orders'] }} {{ $currency }} <i class="fas fa-check"></i>

                    </small>
                @else 

                    <small class="text-muted">

                        {{$notif->data['subject'] }} 

                    </small>

                @endif

                

            </p>

        </a>

    @empty

       <h4 class="text-center">No Notifications</h4>

    @endforelse  

</div>

<!-- All-->

@if ($notifications->count() > 4)

    <a href="{{ route('admin.new_notifications') }}" class="dropdown-item text-center text-primary">

        View all <i class="fi-arrow-right"></i>

    </a>

@endif

</div>