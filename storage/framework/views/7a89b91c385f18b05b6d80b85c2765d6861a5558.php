

<?php $__env->startSection('dropify-css'); ?>
<link href="<?php echo e(asset('back-end/assets/plugins/dropify/css/dropify.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('admin.packs.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
   <?php echo $__env->make('back-end.packs.form-pack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <button type="submit" class="btn btn-dark report-btn float-right"><i aria-hidden="true" class="far fa-save"></i> &nbsp; Save</button>  
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dropify-js'); ?>
<script src="<?php echo e(asset('back-end/assets/plugins/dropify/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('back-end/assets/pages/jquery.form-upload.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\packs\create-pack.blade.php ENDPATH**/ ?>