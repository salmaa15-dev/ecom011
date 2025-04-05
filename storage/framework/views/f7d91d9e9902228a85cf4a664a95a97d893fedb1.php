

<?php $__env->startSection('dropify-css'); ?>
<link href="<?php echo e(asset('back-end/assets/plugins/dropify/css/dropify.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<form action="<?php echo e(route('admin.settings.update', ['setting' => $setting->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('back-end.settings-site.form-settings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-warning report-btn float-right"><i aria-hidden="true" class="far fa-save"></i> &nbsp; Save</button>  
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dropify-js'); ?>
<script src="<?php echo e(asset('back-end/assets/plugins/dropify/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('back-end/assets/pages/jquery.form-upload.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\settings-site\edit-settings.blade.php ENDPATH**/ ?>