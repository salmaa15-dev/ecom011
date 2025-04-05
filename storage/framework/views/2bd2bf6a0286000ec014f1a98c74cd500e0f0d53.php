<?php $__env->startSection('title', 'Brands'); ?>
<?php $__env->startSection('content'); ?>
<div class="pa-medicine mt-3">
    <div class="container">
        <div class="cards mb-2">
            <?php $__currentLoopData = $categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pa-medicine-box"  onclick="location.href='<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>'">
                    <div class="pa-medi-icon">
                        <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>">
                            <img src="<?php echo e($logo); ?>" data-original="<?php echo e($category->logo_urls); ?>" alt="<?php echo e($category->name); ?>" class="lazy img-fluid">
                         </a>
                    </div>
                    <h2><a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>"><?php echo e($category->name); ?></a></h2>  
                    <p class="f-12"><?php echo e($category->description); ?></p>     
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/brands.blade.php ENDPATH**/ ?>