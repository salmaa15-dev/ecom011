<?php $__env->startSection('title', $category->name); ?>

<?php $__env->startSection('description', $category->description); ?>

<?php $__env->startSection('image', $category->logo_urls); ?>

<?php $__env->startSection('content'); ?>
    <!-- breadcrumb start -->
    <div class="pa-breadcrumb">
        <div class="container-fluid">
            <div class="pa-breadcrumb-box">
                <h1>Shop</h1>
                <ul>
                    <li><a href="<?php echo e(route('brands')); ?>">Catégories</a></li>
                    <li><?php echo e($category->name); ?></li>

                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->
    <!-- product start -->
        <div class="pa-product-shop spacer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="cards">
                        <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($product->remove == false): ?>
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
} elseif ($_instance->childHasBeenRendered('t4B0kS5')) {
    $componentId = $_instance->getRenderedChildComponentId('t4B0kS5');
    $componentTag = $_instance->getRenderedChildComponentTagName('t4B0kS5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('t4B0kS5');
} else {
    $response = \Livewire\Livewire::mount('shop', ['productId' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('t4B0kS5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                    </div>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                     <?php if (isset($component)) { $__componentOriginal4356cb7400ce52b14b896a2a87943ce5a3e5bbc6 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\TopProduct::class, []); ?>
<?php $component->withName('top-product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal4356cb7400ce52b14b896a2a87943ce5a3e5bbc6)): ?>
<?php $component = $__componentOriginal4356cb7400ce52b14b896a2a87943ce5a3e5bbc6; ?>
<?php unset($__componentOriginal4356cb7400ce52b14b896a2a87943ce5a3e5bbc6); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
                </div>
            </div>
        </div>
    </div>
    <!-- product end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\productByCategory.blade.php ENDPATH**/ ?>