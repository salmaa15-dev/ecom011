<div class="pa-product-sidebar">

    <div class="pa-widget pa-shop-category mt-4">

        <h2 class="pa-sidebar-title">Categories</h2>

        <ul>

            <?php $__currentLoopData = $categorysByPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li>
                    <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>">
                        <img src="<?php echo e($logo); ?>" data-original="<?php echo e($category->logo_urls); ?>" class="lazy image-fluid-categories">
                        <?php echo e($category->name); ?> 
                        <span><?php echo e($category->products->count()); ?></span>
                        <hr>
                    </a>
                </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($categorysByPro->count() >= 10): ?>

                <div class="col-md-12 text-center mt-3">

                    <a href="<?php echo e(route('brands')); ?>">Voir plus de categories <i class="fas fa-arrow-circle-right text-warning"></i></a>

                </div>

            <?php endif; ?>

        </ul>

    </div>                    

</div><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/partials/categorys.blade.php ENDPATH**/ ?>