<?php $__env->startSection('title', $page->slug); ?>
<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start -->
    <!--<div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>A propos</h1>
                <ul>
                    <li><a href="<?php echo e(route('brands')); ?>">A propos</a></li>
                    <li><?php echo e($page->slug); ?></li>

                </ul>
            </div>
        </div>
    </div>-->
    <!-- breadcrumb end -->
    <!-- product start -->
    <!--<div class="container-fluid mt-3">-->
    <!--    <div class="row">-->
    <!--        <div class="col-md-12">-->
    <!--           <div style="margin-left: 30px">-->
                    <?php echo $page->content; ?>

    <!--           </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- product end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\aprops.blade.php ENDPATH**/ ?>