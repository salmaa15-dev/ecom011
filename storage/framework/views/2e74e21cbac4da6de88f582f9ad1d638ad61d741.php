

<?php $__env->startSection('dropify-css'); ?>
<link href="<?php echo e(asset('back-end/assets/plugins/dropify/css/dropify.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('admin.products.update', ['product' => $product->id])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>   
    <div class="card">
        <div class="card-body"> 
            <label><i class="fas fa-eye text-info"></i> views</label>  
        <input type="number" name="view" class="form-control <?php $__errorArgs = ['view'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> mb-3" value="<?php echo e(old('view', $product->view ?? null)); ?>">
            <?php $__errorArgs = ['view'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback" role="alert">
                    <strong class="h6"><?php echo e($message); ?></strong>
                </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div><!--end card-body-->
    </div>
    
   <?php echo $__env->make('back-end.products.form-product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <button type="submit" class="btn btn-warning report-btn float-right"><i class="far fa-edit"></i> &nbsp; Save</button>  
    <a href="<?php echo e(route('admin.products.show', ['product' => $product->slug])); ?>" class="btn btn-soft-info waves-effect waves-light float-right mr-2"><i class="fas fa-info-circle"></i> Plus info..</a>
</form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dropify-js'); ?>
<script src="<?php echo e(asset('back-end/assets/plugins/dropify/js/dropify.min.js')); ?>"></script>
<script src="<?php echo e(asset('back-end/assets/pages/jquery.form-upload.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\products\edit-product.blade.php ENDPATH**/ ?>