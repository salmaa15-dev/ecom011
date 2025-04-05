<?php $notification = Auth::user()->notifications?>

<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">            
        <p class="text-muted mb-4">You can see all notifications  (<?php echo e($notification->count()); ?>)</p>
        <?php $__empty_1 = true; $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <strong class="text-<?php echo e($notif->type == Constant::NotificationType ? 'info': 'dark'); ?> f-25 float-right">
               Notification at (<?php echo e($notif->created_at->diffForHumans()); ?>)
            </strong>
            <br>
            <div style="box-shadow: 7px 6px 12px -4px;" class="alert icon-custom-alert alert-outline-<?php echo e($notif->type == Constant::NotificationType ? 'info': 'dark'); ?> alert-success-shadow">
                <span aria-hidden="true"><i class="mdi mdi-<?php echo e($notif->type == Constant::NotificationType ? 'cart-outline' : 'message'); ?> alert-icon"></i></span>
                <div class="alert-text">
                    <strong><?php echo e($notif->data['name']); ?></strong>
                    <a href="mailto:<?php echo e($notif->data['email']); ?>" class="badge badge-pill badge-dark mb-3"><?php echo e($notif->data['email']); ?></a>
                    <br>
                    <?php if($notif->type == Constant::NotificationType): ?>
                        Total orders: <?php echo e($notif->data['total_orders']); ?> <?php echo e($currency); ?> <i class="fas fa-check"></i>
                    <?php else: ?>
                        <strong>Subject: </strong> <?php echo e($notif->data['subject']); ?>

                        <br>
                       <strong> Message: </strong><?php echo e($notif->data['message']); ?>

                    <?php endif; ?>
                </div>                                       
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h4 class="text-center">No Notifications</h4>
        <?php endif; ?>                                        
    </div><!--end card-body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\notifications\new-notification.blade.php ENDPATH**/ ?>