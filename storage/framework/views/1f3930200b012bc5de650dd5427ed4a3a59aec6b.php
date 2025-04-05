<?php $__env->startSection('content'); ?>
<h4 class="mt-0 header-title text-white">change category</h4>

	<form action="<?php echo e(route('admin.pages.update', ['page'=> $page->id])); ?>" method="post">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>
		<?php echo $__env->make('back-end.pages.form-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Change Page</button>  
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\pages\edit-page.blade.php ENDPATH**/ ?>