<?php $__env->startSection('title', $product->title.', Price '.$product->price_net.' '.$currency); ?>
<?php $__env->startSection('image', $product->LogoUrls); ?>
<?php $__env->startSection('description', $product->description); ?>
<?php $__env->startSection('content'); ?>
<div class="pa-breadcrumb">
    <div class="container-fluid">
        <div class="pa-breadcrumb-box">
            <ul>
                <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
                <li>Shop <?php echo e($product->title); ?></li>
            </ul>
        </div>
    </div>
</div>

<!-- breadcrumb end -->
<!-- product single start -->
<div class="pa-product-single spacer-top">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="text-center">
                            <img src="<?php echo e($logo); ?>" data-original="<?php echo e($product->LogoUrls); ?>" alt="<?php echo e($product->title); ?>" class="lazy image-fluid-product"/>
                            
                        </div>
                    </div>
            
                    <div class="col-sm-5">
                        <div class="pa-prod-content">
                            <a href="#" class="title-pack"><?php echo e($product->title); ?></a>
                            <?php if($product->etat_sale): ?>
                                <p class="text-danger">
                                    <span class="pa-prod-price">Price: <?php echo e(int_to_decimal($product->sale)); ?> <?php echo e($currency); ?> </span>
                                    <del><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></del> 
                                    <span class="pa-prod-price text-danger" style="font-size: 15px"><?php echo $product->percent; ?></span>
                                </p>
                                <?php else: ?>
                                <p class="pa-prod-price">Price:<span> <?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></span></p>
                            <?php endif; ?>
                            <?php if($product->category): ?>
                                <a href="#" class="pa-prod-category"><span>Category:</span> <?php echo e($product->category->name); ?></a>                                
                            <?php endif; ?>
                            <p class="pa-rating">
                                <?php echo e($product->view); ?> <i class="fas fa-eye text-info"></i> views
                            </p>
                            
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('add-to-cart-button', ['productId' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('3QNbKWc')) {
    $componentId = $_instance->getRenderedChildComponentId('3QNbKWc');
    $componentTag = $_instance->getRenderedChildComponentTagName('3QNbKWc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3QNbKWc');
} else {
    $response = \Livewire\Livewire::mount('add-to-cart-button', ['productId' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('3QNbKWc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            <h4>Description</h4>
                            <div class="pa-prod-content">
                                <p class="text-muted"><?php echo e($product->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <?php echo $__env->make('front-end.partials.categorys', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
         <!-- product start -->
         <div class="pa-related-product">
            <div class="container">
                <div class="pa-heading">
                    <?php if($Related_products->count()): ?>
                        <h3>Produits connexes</h3>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $Related_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="pa-product-box" onclick="location.href='<?php echo e(route('details', ['slug' => $item->slug])); ?>'">
                                        <div class="pa-product-img">
                                            <a href="<?php echo e(route('details', ['slug' => $item->slug])); ?>">
                                                <img src="<?php echo e($logo); ?>" data-original="<?php echo e($item->LogoUrls); ?>" alt="<?php echo e($item->title); ?>" class="lazy img-fluid"/>
                                            </a>
                                        </div>
                                        <div class="pa-product-content">
                                            <h4><a href="<?php echo e(route('details', ['slug' => $item->slug])); ?>"><?php echo e($item->title); ?></a></h4>
                                            <p class="pa-product-rating">
                                                <strong class="text-dark"><?php echo e($item->view); ?></strong> <i class="fas fa-eye text-dark"></i> <strong>views</strong>
                                            </p>
                                            <?php if($item->etat_sale): ?>
                                                <p class="pa-prod-price"><span><del><?php echo e(int_to_decimal($item->price)); ?> <?php echo e($currency); ?></del></span><?php echo e(int_to_decimal($item->sale)); ?> <?php echo e($currency); ?></p><span class="text-danger"><?php echo $item->percent; ?></span>
                                            <?php else: ?>
                                                <p class="pa-prod-price"><span> <?php echo e(int_to_decimal($item->price)); ?> <?php echo e($currency); ?></span></p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product end -->
    </div>
</div>
<script>
    // JavaScript to change the author's image when any of the clickable images are clicked
    const clickableImages = document.querySelectorAll('.clickable-img'); // Get all images with class 'clickable-img'
    const authorImage = document.getElementById('authorImage'); // Get the author's main image

    clickableImages.forEach(img => {
        img.addEventListener('click', function() {
            // Set the src of the author's image to the src of the clicked image
            authorImage.src = this.src;
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/shop-products.blade.php ENDPATH**/ ?>