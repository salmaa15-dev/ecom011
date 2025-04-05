<div class="pa-product-sidebar mb-3">
    <div class="pa-widget pa-product-widget">
        <h2 class="pa-sidebar-title">Meilleurs Produits</h2>
        <ul>
           <?php $__currentLoopData = $dbdata ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $item->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li onclick="location.href='<?php echo e(route('details', ['slug' => $product->slug])); ?>'">
                        <div class="pa-pro-wid-img">
                            <img src="<?php echo e($logo); ?>" 
                                data-original="<?php echo e($product->logo_urls); ?>" 
                                alt="<?php echo e($product->title); ?>" 
                                class="lazy image-fluid"/>
                        </div>
                        <div class="pa-pro-wid-content">
                            <h4><a href="javascript::;"><?php echo e($item->name); ?></a></h4>
                            <a href="javascript::;"><?php echo e($product->description_limit); ?></a>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div> 
    <div class="pa-widget pa-shop-category">
        <h2 class="pa-sidebar-title">Categories</h2>
        <ul>
            <?php $__currentLoopData = $categorysByPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li onclick="location.href='<?php echo e(route('productByCategory', ['productBycategory' => $categorie->slug])); ?>'">
                    <a href="javascript::;"> 
                        <?php echo e($categorie->name); ?> 
                        <span><?php echo e($categorie->products_count); ?></span>
                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>        
</div><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\components\top-product.blade.php ENDPATH**/ ?>