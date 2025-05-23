<?php $__env->startSection('title', 'Sales'); ?>
<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>Shop</h1>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">home</a></li>
                    <li>sales</li>

                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- product start -->
        <div class="pa-product-shop spacer-top">
        <div class="container">
            <div class="cards">
                <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="pa-blog-box">
                        <a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>">
                            <img src="<?php echo e($logo); ?>" data-original="<?php echo e($product->LogoUrls); ?>" alt="<?php echo e($product->title); ?>" class="lazy image-fluid"/>
                        </a>  
                        <div class="pa-blog-title">
                            <strong class="text-danger float-right"><?php echo $product->percent; ?></strong>
                            <strong><a  href="<?php echo e(route('details', ['slug' => $product->slug])); ?>"><?php echo e($product->title); ?></a></strong>
                            <br>
                            <?php if($product->etat_sale): ?>
                                <strong><?php echo e(int_to_decimal($product->sale)); ?> <?php echo e($currency); ?></strong>
                                &nbsp;
                                <del class="text-danger"><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></del>
                            <?php else: ?>
                                <strong><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></strong>
                            <?php endif; ?>
                            <br>
                            <strong class="float-right"><?php echo e($product->view); ?> <i class="fas fa-eye text-info"></i> views</strong>
                        </div>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('shop', ['productId' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('5ipvUT7')) {
    $componentId = $_instance->getRenderedChildComponentId('5ipvUT7');
    $componentTag = $_instance->getRenderedChildComponentTagName('5ipvUT7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('5ipvUT7');
} else {
    $response = \Livewire\Livewire::mount('shop', ['productId' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('5ipvUT7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <!-- product end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\sales.blade.php ENDPATH**/ ?>