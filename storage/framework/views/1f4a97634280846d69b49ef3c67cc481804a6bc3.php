
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">        
        <h4 class="mt-0 header-title">categorys</h4>
        <p class="text-muted mb-4">
        </p>
        <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                <div class="toast-header">
                    <img src="<?php echo e($category->LogoUrls); ?>" alt="<?php echo e($category->name); ?>" class="thumb-xs rounded-circle">
                    <strong class="mr-auto"><?php echo e($category->name); ?></strong>
                    <a href="<?php echo e(route('admin.categorys.edit', ['category' => $category->id])); ?>" class="mf-3"><i class="far fa-edit text-warning"></i></a>
                    &nbsp;
                    <form action="<?php echo e(route('admin.categorys.destroy', ['category' => $category->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                    </form>
                </div>
                <div class="toast-body">
                    <?php echo e($category->description); ?>
                    <br>
                    <small class="float-right badge badge-pill badge-dark mb-3"><?php echo e(Carbon\Carbon::parse($category->created_at)->toFormattedDateString()); ?></small>
                </div>
            </div> <!--end toast-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><!--end card-body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/categorys/list-category.blade.php ENDPATH**/ ?>