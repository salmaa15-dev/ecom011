<?php $__env->startSection('content'); ?>

<div class="pa-breadcrumb">

    <div class="container-fluid">

        <div class="pa-breadcrumb-box">

            <ul>

                <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>

                <li>Panier</li>

            </ul>

        </div>

    </div>

</div>

<!-- breadcrumb end -->

<!-- product single start -->

<div class="pa-product-single spacer-top">

    <div class="container">

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-g', [])->html();
} elseif ($_instance->childHasBeenRendered('nlbWjpX')) {
    $componentId = $_instance->getRenderedChildComponentId('nlbWjpX');
    $componentTag = $_instance->getRenderedChildComponentTagName('nlbWjpX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('nlbWjpX');
} else {
    $response = \Livewire\Livewire::mount('cart-g', []);
    $html = $response->html();
    $_instance->logRenderedChild('nlbWjpX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/cart-shopping.blade.php ENDPATH**/ ?>