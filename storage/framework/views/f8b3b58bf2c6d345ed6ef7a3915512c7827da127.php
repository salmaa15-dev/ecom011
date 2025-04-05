
<?php $__env->startSection('content'); ?>
	<form action="<?php echo e(route('admin.countries.store')); ?>" method="post">
		<?php echo csrf_field(); ?>
		<?php echo $__env->make('back-end.countries.form-countrie', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-warning report-btn float-right m-2"><i class="far fa-edit"></i> &nbsp; Create Country !</button>  
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\countries\create-countrie.blade.php ENDPATH**/ ?>