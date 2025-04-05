<?php $__env->startSection('content'); ?>

<div class="card col-lg-6 mx-auto">

    <div class="card-body">        

        <h4 class="mt-0 header-title">Redaction Product</h4>

        <p class="text-muted mb-4">

        </p>

        

        <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        



        <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">

            <div class="toast-header">

                <img src="<?php echo e($product->LogoUrls); ?>" alt="<?php echo e($product->title); ?>" class="thumb-xs rounded-circle">

                <strong class="mr-auto"><?php echo e($product->title); ?></strong>

                <del class="text-danger text-right f-25 mb-0 font-weight-bold"><?php echo e($product->price); ?> <?php echo e($currency); ?><i class="fas fa-times"></i></del>

            </div>

            <div class="toast-body">

                <form action="<?php echo e(route('admin.discount')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <?php echo method_field('PATCH'); ?>

                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>

                        </div>

                        <input type="text" name="sale" class="form-control <?php $__errorArgs = ['sale'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Please enter a new sale ...">

                        <?php $__errorArgs = ['sale'];
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

                    </div>

                    <div class="float-right m-2">

                        <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-danger btn-sm btn-round waves-effect waves-light"><i class="fas fa-times"></i> Cancel</a>

                        <button type="submit" class="btn btn-success btn-sm btn-round waves-effect waves-light"><i class="mdi mdi-check-all mr-2"></i>Save sale</button>

                    </div>

                </form>

            </div>

        </div> <!--end toast-->

    </div><!--end card-body-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\products\discount-product.blade.php ENDPATH**/ ?>