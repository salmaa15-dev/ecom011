<a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"

aria-haspopup="false" aria-expanded="false">

<i class="mdi mdi-bell-outline nav-icon"></i>

<span class="badge badge-danger badge-pill noti-icon-badge"><?php echo e($notifications->count()); ?></span>

</a>

<div class="dropdown-menu dropdown-menu-right dropdown-lg">

<!-- item-->

<h6 class="dropdown-item-text">

    <?php if($notifications->count()): ?>

        Notifications (<?php echo e($notifications->count()); ?>)

    <?php endif; ?>

</h6>

<div class="slimscroll notification-list">

    <!-- item-->

    <?php $__empty_1 = true; $__currentLoopData = $notifications->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <a href="<?php echo e(route('admin.show_notification', ['notification_id' => $notif->id, 'type' => $notif->type])); ?>" class="dropdown-item notify-item">

            <div class="notify-icon <?php echo e($notif->type == Constant::NotificationType ? 'bg-success' : 'bg-danger'); ?>">

                <i class="mdi mdi-<?php echo e($notif->type == Constant::NotificationType ? 'cart-outline' : 'message'); ?>"></i>

            </div>

            <p class="notify-details"><?php echo e($notif->data['name']); ?>


                <small class="text-success text-muted float-right">

                    <?php echo e($notif->created_at->diffForHumans()); ?>


                </small>

                <?php if($notif->type == Constant::NotificationType): ?>

                    <small class="text-success float-left">

                        Total orders: <?php echo e($notif->data['total_orders']); ?> <?php echo e($currency); ?> <i class="fas fa-check"></i>

                    </small>
                <?php else: ?> 

                    <small class="text-muted">

                        <?php echo e($notif->data['subject']); ?> 

                    </small>

                <?php endif; ?>

                

            </p>

        </a>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

       <h4 class="text-center">No Notifications</h4>

    <?php endif; ?>  

</div>

<!-- All-->

<?php if($notifications->count() > 4): ?>

    <a href="<?php echo e(route('admin.new_notifications')); ?>" class="dropdown-item text-center text-primary">

        View all <i class="fi-arrow-right"></i>

    </a>

<?php endif; ?>

</div><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/components/notification-component.blade.php ENDPATH**/ ?>