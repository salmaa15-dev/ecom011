

<?php $__env->startSection('dropify-css'); ?>
<link href="<?php echo e(asset('back-end/assets/plugins/dropify/css/dropify.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('admin.packs.update', ['pack' => $pack->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
   <?php echo $__env->make('back-end.packs.form-pack', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Save</button>  
    <a href="<?php echo e(route('admin.packs.show', ['pack' => $pack->slug])); ?>" class="btn btn-soft-info  waves-effect waves-light float-right mr-2"><i class="fas fa-info-circle"></i> Plus info..</a>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dropify-js'); ?>
<script src="<?php echo e(asset('back-end/assets/plugins/dropify/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('back-end/assets/pages/jquery.form-upload.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\packs\edit-pack.blade.php ENDPATH**/ ?>