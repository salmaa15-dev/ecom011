<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">
        <strong class="text-<?php echo e($notification->type == Constant::NotificationType ? 'success': 'dark'); ?> f-25 float-right">
            Notification at (<?php echo e($notification->created_at->diffForHumans()); ?>)
        </strong>
        <br>
        <div style="box-shadow: 7px 6px 12px -4px;" class="alert icon-custom-alert alert-outline-<?php echo e($notification->type == Constant::NotificationType ? 'success': 'dark'); ?> alert-success-shadow">
            <span aria-hidden="true"><i class="mdi mdi-<?php echo e($notification->type == Constant::NotificationType ? 'cart-outline' : 'message'); ?> alert-icon"></i></span>
            <div class="alert-text">
                <strong><?php echo e($notification->data['name']); ?></strong>
                <a href="mailto:<?php echo e($notification->data['email']); ?>" class="badge badge-pill badge-dark mb-3"><?php echo e($notification->data['email']); ?></a>
                <br>
                <?php if($notification->type == Constant::NotificationType): ?>
                    Total orders: <?php echo e($notification->data['total_orders']); ?> <?php echo e($currency); ?><i class="fas fa-check"></i>
                <?php else: ?>
                    <strong>Subject: </strong> <?php echo e($notification->data['subject']); ?>

                    <br>
                    <strong> Message: </strong><?php echo e($notification->data['message']); ?>

                <?php endif; ?>
            </div>                                       
        </div>                   
    </div><!--end card-body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\notifications\notification.blade.php ENDPATH**/ ?>