<?php $__env->startSection('title', 'Packs'); ?>
<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>Shop</h1>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li>Offres</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- product start -->
    <div class="pa-product-shop spacer-top spacer-bottom">
        <div class="container">
            <div class="row">
                <?php $__empty_1 = true; $__currentLoopData = $packs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-lg-4">
                        <div class="pa-blog-box">
                            <a href="<?php echo e(route('details', ['slug' => $pack->slug])); ?>">
                                <img src="<?php echo e($logo); ?>" data-original="<?php echo e($pack->LogoUrls); ?>" alt="<?php echo e($pack->title); ?>" class="lazy image-fluid">
                            </a>  
                            <div class="pa-blog-title">
                                <strong class="text-danger float-right"><?php echo $pack->percent; ?></strong>
                                <h6><a href="<?php echo e(route('details', ['slug' => $pack->slug])); ?>"><?php echo e($pack->title); ?></a></h6>
                                    <strong><?php echo e(int_to_decimal($pack->price)); ?> <?php echo e($currency); ?></strong>
                                    <strong class="float-right"><?php echo e($pack->view); ?> <i class="fas fa-eye text-info"></i> views</strong>
                            </div>
                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('shop', ['productId' => $pack->id])->html();
} elseif ($_instance->childHasBeenRendered('3aErUau')) {
    $componentId = $_instance->getRenderedChildComponentId('3aErUau');
    $componentTag = $_instance->getRenderedChildComponentTagName('3aErUau');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3aErUau');
} else {
    $response = \Livewire\Livewire::mount('shop', ['productId' => $pack->id]);
    $html = $response->html();
    $_instance->logRenderedChild('3aErUau', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-lg-12 text-center">
                            <a href="javascript:void(0);" class="f-25">There's no packs yet</a>
                        </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- product end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/packs.blade.php ENDPATH**/ ?>