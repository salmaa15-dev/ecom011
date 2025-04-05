<?php $__env->startSection('content'); ?>
    <h4 class="mt-0 header-title text-white">Create a new category</h4>
    <form action="<?php echo e(route('admin.pages.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('back-end.pages.form-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-dark report-btn float-right mf-5"><i aria-hidden="true" class="far fa-save"></i> &nbsp; Save Page</button>  
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\pages\create-page.blade.php ENDPATH**/ ?>