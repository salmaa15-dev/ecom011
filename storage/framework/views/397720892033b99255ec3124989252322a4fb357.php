<div class="pa-main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="pa-logo">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e($logo); ?>" data-original="<?php echo e($logo_nav_bar); ?>" width="129px" alt="image" class="lazy img-fluid"/>
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-6">
                <div class="pa-nav-bar">
                    <div class="pa-menu">
                        <ul>
                            <li class="pa-menu-child"><a href="/">Accueil</a></li>
                            <li>
                                <a href="<?php echo e(route('packs')); ?>">Offres</a>
                            </li>
                            <li class="pa-menu-child"><a href="Javascript:;">À propos</a>
                                <ul class="pa-submenu">
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('aprops',['page' => $page->slug])); ?>"><?php echo e($page->slug); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li class="pa-menu-child"><a href="Javascript:;">Shop</a>
                                <ul class="pa-submenu">
                                    <?php $__currentLoopData = $categorysByPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>"><?php echo e($category->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(route('sales')); ?>">
                                    Solde
                                </a>
                            </li>
                            <li><a href="<?php echo e(route('brands')); ?>">Categories</a></li>
                            <li><a href="<?php echo e(route('contact')); ?>">Contactez-nous</a></li>
                            <li><a href="<?php echo e(route('login')); ?>">Log In</a></li>
                        </ul>
                    </div>
                    <div class="pa-head-icon">
                        <ul>
                            <li>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart-button', [])->html();
} elseif ($_instance->childHasBeenRendered('bJTfyN7')) {
    $componentId = $_instance->getRenderedChildComponentId('bJTfyN7');
    $componentTag = $_instance->getRenderedChildComponentTagName('bJTfyN7');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bJTfyN7');
} else {
    $response = \Livewire\Livewire::mount('cart-button', []);
    $html = $response->html();
    $_instance->logRenderedChild('bJTfyN7', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </li>
                        </ul>
                        <div class="pa-toggle-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views/front-end/partials/navbar.blade.php ENDPATH**/ ?>