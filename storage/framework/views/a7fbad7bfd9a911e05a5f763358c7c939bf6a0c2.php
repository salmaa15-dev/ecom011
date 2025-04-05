<!DOCTYPE html>
<html lang="en"lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
         <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title><?php echo e($title); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e($logo); ?>" type="image/x-icon">
        <?php echo $__env->yieldContent('dropify-css'); ?>
        <!-- App css -->
        <link href="<?php echo e(asset('back-end/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('back-end/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('back-end/assets/css/metismenu.min.css')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('back-end/assets/css/style.css')); ?>" rel="stylesheet" type="text/css" />
        <?php echo $__env->yieldContent('loader-cart'); ?>
        <?php echo $__env->yieldContent('select2-style'); ?>
        <?php echo $__env->yieldContent('tinycme-header'); ?>
        <?php echo \Livewire\Livewire::styles(); ?>


    </head>
    <body>
        <?php echo $__env->make('loader.loader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Top Bar Start -->
        <div class="topbar">
             <!-- Navbar -->
            <?php echo $__env->make('back-end.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <?php echo $__env->make('back-end.partials.top-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end page-wrapper-img-->
        <div class="page-wrapper">
            <div class="page-wrapper-inner">
                <!-- Left Sidenav -->
                <?php echo $__env->make('back-end.partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>      
                <!-- end left-sidenav-->
                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <div class="mt-5"></div>
                    <?php echo $__env->make('back-end.partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <!-- container -->
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
        <!-- end page-wrapper -->
        <!-- jQuery  -->
        <script src="<?php echo e(asset('back-end/assets/js/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('back-end/assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('back-end/assets/js/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('back-end/assets/js/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('back-end/assets/js/jquery.slimscroll.min.js')); ?>"></script>
        <script src="<?php echo e(asset('loader/swiper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('loader/custom.js')); ?>"></script>
        <?php echo $__env->yieldContent('select2-script'); ?>
        <?php echo $__env->yieldContent('dropify-js'); ?>
        <?php echo $__env->yieldContent('tinymce'); ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <!-- App js -->
        <script src="<?php echo e(asset('back-end/assets/js/app.js')); ?>"></script>

    </body>

</html><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/layouts/back-end.blade.php ENDPATH**/ ?>