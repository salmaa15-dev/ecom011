<?php $__env->startSection('divider'); ?>
<link rel="stylesheet" href="<?php echo e(asset('front-end/assets/css/divider.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- start header -->
<?php echo $__env->make('front-end.partials.header.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- end header -->
  <!-- feature start -->
<div class="pa-feature">
    <div class="container mt-5">
        <hr data-content="Categories" class="hr-text">
        <br>
        <div class="row">
            <div class="col-12">
                <ul>
                    <?php $__currentLoopData = $categorys->take(6)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>">
                            <img  src="<?php echo e($logo); ?>" class="lazy image-fluid-categories"
                               data-original="<?php echo e($category->logo_urls); ?>" 
                               alt="<?php echo e($category->name); ?>">
                            </a>
                            <div class="text-center">
                                <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>"><?php echo e($category->name); ?></a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </ul>
            </div>
            <?php if($categorys->count() > 5): ?>
                <div class="col-md-12 text-center">
                    <a href="<?php echo e(route('brands')); ?>">Voir plus de catégories <i class="fas fa-arrow-circle-right text-danger"></i></a>
                </div>
            <?php endif; ?>  
        </div>
    </div>
</div>
<!-- feature end -->
<div class="pa-blog">
   <div class="container">
       <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <hr data-content="<?php echo e($category->name); ?>" class="hr-text">
               <div class="cards mt-4" style="display: flex;justify-content: center;">
                   <?php $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <div class="pa-blog-box">
                           <a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>">
                               <img src="<?php echo e($logo); ?>" 
                                   data-original="<?php echo e($product->LogoUrls); ?>" 
                                   alt="<?php echo e($product->title); ?>" 
                                   class="lazy image-fluid"/>
                           </a>  
                           <div class="pa-blog-title">
                               <span class="badge badge-pill badge-danger float-right"><?php echo $product->percent; ?></span>
                               <strong><a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>"><?php echo e($product->title); ?></a></strong>
                               <br>
                               <?php if($product->etat_sale): ?>
                                   <strong><?php echo e(int_to_decimal($product->sale)); ?> <?php echo e($currency); ?></strong>
                                   &nbsp;
                                   <del class="text-danger strong"><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></del>
                               <?php else: ?>
                                   <strong><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></strong>
                               <?php endif; ?>
                               <br>
                               <strong class="float-right"><?php echo e($product->view); ?> <i class="fas fa-eye text-info"></i> vues</strong>
                           </div>
                           <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('shop', ['productId' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered('ETd8JqV')) {
    $componentId = $_instance->getRenderedChildComponentId('ETd8JqV');
    $componentTag = $_instance->getRenderedChildComponentTagName('ETd8JqV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ETd8JqV');
} else {
    $response = \Livewire\Livewire::mount('shop', ['productId' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild('ETd8JqV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                       </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <?php if($category->products_count > 2 && $category->products->count() != 0): ?>
                   <div class="text-center">
                       <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>">Voir plus <i class="fas fa-arrow-circle-right text-danger"></i></a>
                   </div>
               <?php endif; ?>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <div class="text-center">
                 <strong class="f-25">There's no products yet</strong>
             </div>
       <?php endif; ?>
   </div>
</div>
 <!-- why pure start -->
 <?php echo $__env->make('front-end.partials.product-purity', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- why pure end -->

 <!-- trending product start -->
 <div class="pa-trending-product pa-product-two mt-3">
    <div class="container">
        <div class="pa-heading">
            <h1>Solde produits</h1>
            <h5>Bienvenue</h5>
        </div>
        <div class="row">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="pa-product-box" onclick="location.href='<?php echo e(route('details', ['slug' => $sale->slug])); ?>'">
                                <div class="pa-product-img">
                                    <img src="<?php echo e($sale->LogoUrls); ?>" alt="image" class="img-fluid"/>
                                </div>
                                <div class="pa-product-content">
                                    <h4><a href="product-single.html"><?php echo e($sale->title); ?></a></h4>
                                    <p><del><?php echo e($sale->price); ?> <?php echo e($currency); ?></del><?php echo e($sale->sale); ?> <?php echo e($currency); ?></p>
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
<!-- trending product end -->

 <!-- counter start -->
 <div class="pa-counter spacer-top spacer-bottom">
    <div class="container">
        <div class="pa-heading">
            <h1>Bénéficiez de choisir le meilleur</h1>
            <h5>Nos réalisations récentes</h5>
        </div>
        <div class="pa-counter-main" id="counter">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="pa-counter-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 467.528 467.528">
                            <g>
                                <path d="M431.095,409.6l-71.6-124c28-30.4,44.8-70.8,44.8-115.2c0-47.2-19.2-89.6-50-120.4s-73.2-50-120.4-50s-89.6,19.2-120.4,50
                                    c-30.8,30.8-50,73.2-50,120.4c0,44.4,16.8,84.8,44.8,115.2l-71.6,124c-1.2,2-1.6,4.8-0.8,7.6c1.6,4.4,6.4,6.4,10.8,4.8l57.2-22.8
                                    l8.8,61.2c0.4,2.4,1.6,4.8,4,6c4,2.4,9.2,0.8,11.6-3.2l72.4-125.2c10.4,2,21.6,3.2,32.4,3.2c11.2,0,22-1.2,32.4-3.2l72.4,125.2
                                    c2.4,4,7.6,5.2,11.6,3.2c2.4-1.2,3.6-3.6,4-6l8.8-61.2l57.2,22.8c4.4,1.6,9.2-0.4,10.8-4.8
                                    C432.695,414.4,432.295,411.6,431.095,409.6z M126.695,433.6l-7.2-47.6c-0.8-4.4-4.8-7.6-9.6-7.2c-0.8,0-1.6,0.4-2.4,0.8
                                    l-44.4,17.6l57.6-99.6c18,16,39.6,28.4,63.6,35.6L126.695,433.6z M233.895,324c-42.4,0-80.8-17.2-108.4-44.8
                                    c-27.6-27.6-44.8-66-44.8-108.4c0-42.4,17.2-80.8,44.8-108.4c27.6-28.4,66-45.6,108.4-45.6c42.4,0,80.8,17.2,108.4,44.8
                                    c27.6,27.6,44.8,66,44.8,108.4c0,42.4-17.2,80.8-44.8,108.4C314.695,306.8,276.295,324,233.895,324z M360.295,379.6
                                    c-0.8-0.4-1.6-0.8-2.4-0.8c-4.4-0.8-8.8,2.4-9.6,7.2l-7.2,47.6l-57.6-100.4c24-7.2,45.6-19.6,63.6-35.6l57.6,99.6L360.295,379.6z"
                                    />
                            </g>
                            <g>
                                <path d="M312.295,140.8c-2-2.8-4.4-4.8-7.2-6s-6-2-9.2-1.6h-33.2l-10.4-32.8c-1.6-4.8-5.2-8.8-9.2-11.2c-2.8-1.2-5.6-2-8.8-2
                                    s-6,0.8-8.8,2c-4.4,2.4-7.6,6-9.2,11.2l-10.4,32.8h-33.2c-3.2-0.4-6.4,0.4-9.2,1.6s-5.2,3.2-7.2,6c-3.2,4.4-4,9.2-3.2,14
                                    c0.8,4.8,3.2,9.2,7.6,12.4l28,20l-10.8,32.8c0,0.4,0,0.8-0.4,0.8c-0.8,2.4-0.8,5.2-0.4,8c0.4,2.8,1.6,5.6,3.6,8
                                    c3.2,4.4,7.6,6.8,12.4,7.6s10-0.4,14-3.6l28-20.4l28,20.4c4.4,3.2,9.2,4,14,3.6c4.8-0.8,9.2-3.2,12.4-7.6c2-2.4,2.8-5.2,3.6-8
                                    c0.4-2.8,0.4-5.2-0.4-8c0-0.4,0-0.8-0.4-0.8l-10.8-32.8l28-20c4.4-3.2,6.8-7.6,7.6-12.4
                                    C316.695,150.4,315.495,145.2,312.295,140.8z M298.295,153.6l-0.4,0.4l-32.4,23.6c-2.8,2-4.4,6-3.2,9.2l12.4,38v0.4
                                    c0,0.4,0,0.8,0,1.2c0,0.4,0,0.8-0.4,0.8c-0.4,0.4-0.8,0.8-1.6,0.8c-0.4,0-1.2,0-1.6-0.4l-32.8-24c-1.6-1.2-3.2-1.6-5.2-1.6
                                    c-1.6,0-3.6,0.4-5.2,1.6l-32.8,24c-0.4,0.4-1.2,0.4-1.6,0.4c-0.4,0-1.2-0.4-1.6-0.8c-0.4-0.4-0.4-0.8-0.4-0.8c0-0.4,0-0.8,0-1.2
                                    v-0.4l12.4-38c1.2-3.6,0-7.2-3.2-9.2l-30.8-23.6l-0.4-0.4c-0.4-0.4-0.8-0.8-0.8-1.2c0-0.4,0-1.2,0.4-1.6c0,0,0-0.4,0.4-0.4
                                    c0.4-0.4,0.4-0.4,0.8-0.4c0.4,0,0.8-0.4,1.2-0.4c0.4,0,0.8,0,1.2,0h39.2c3.6,0,6.8-2.4,8-6l12.4-38.4c0-0.4,0.4-1.2,1.2-1.2
                                    c0.4,0,0.8-0.4,0.8-0.4c0.4,0,0.8,0,0.8,0.4c0.4,0.4,0.8,0.8,1.2,1.2l12.4,38.4c1.2,3.2,4.4,6,8,6h39.2c0.4,0,0.8,0,1.2,0
                                    c0.4,0,0.8,0,1.2,0.4c0.4,0,0.4,0.4,0.8,0.4c0,0,0,0.4,0.4,0.4c0.4,0.4,0.4,0.8,0.4,1.6
                                    C299.095,152.8,298.695,153.2,298.295,153.6z"/>
                            </g>
                            <g>
                                <path d="M327.895,76.4c-24-24-57.2-38.8-94-38.8s-70,14.8-94,38.8s-38.8,57.2-38.8,94s14.8,70,38.8,94s57.2,38.8,94,38.8
                                    s70-14.8,94-38.8s38.8-57.2,38.8-94C366.695,133.6,351.895,100.4,327.895,76.4z M316.295,252.4c-21.2,21.2-50.4,34-82.4,34
                                    s-61.2-13.2-82-34c-21.2-21.2-34-50-34-82s13.2-61.2,34-82c20.8-21.2,50-34.4,82-34.4s61.2,13.2,82,34c21.2,21.2,34,50,34,82
                                    S337.095,231.6,316.295,252.4z"/>
                            </g>
                        </svg>                            
                        <h1 class="counter-value" data-count="4">4</h1>
                        <p>Années d'expérience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pa-counter-box">
                        <svg viewBox="-69 0 511 511.9968" xmlns="http://www.w3.org/2000/svg"><path d="m144.988281 155.433594c2.46875-3.480469 3.890625-3.902344 3.878907-3.921875.078124.019531 1.5.4375 3.96875 3.921875 2.394531 3.378906 7.074218 4.179687 10.457031 1.78125 3.378906-2.394532 4.175781-7.074219 1.78125-10.453125-4.820313-6.800781-10.257813-10.25-16.160157-10.25-5.90625 0-11.34375 3.449219-16.164062 10.25-2.394531 3.378906-1.59375 8.0625 1.785156 10.457031 1.316406.933594 2.832032 1.378906 4.328125 1.378906 2.351563 0 4.664063-1.101562 6.125-3.164062zm0 0"/><path d="m210.1875 157.21875c3.382812 2.394531 8.0625 1.59375 10.457031-1.785156 2.46875-3.480469 3.890625-3.902344 3.878907-3.921875.074218.019531 1.496093.441406 3.96875 3.921875 1.460937 2.066406 3.773437 3.164062 6.125 3.164062 1.5 0 3.011718-.445312 4.328124-1.378906 3.378907-2.394531 4.179688-7.078125 1.78125-10.457031-4.816406-6.800781-10.257812-10.246094-16.160156-10.246094s-11.34375 3.445313-16.160156 10.246094c-2.394531 3.378906-1.597656 8.058593 1.78125 10.457031zm0 0"/><path d="m153.453125 191.394531c-3.761719 1.734375-5.40625 6.191407-3.671875 9.953125 6.628906 14.371094 21.136719 23.65625 36.957031 23.65625 15.824219 0 30.328125-9.285156 36.957031-23.65625 1.734376-3.761718.09375-8.21875-3.667968-9.953125-3.761719-1.734375-8.21875-.089843-9.953125 3.671875-4.183594 9.074219-13.34375 14.9375-23.335938 14.9375-9.988281 0-19.148437-5.867187-23.335937-14.9375-1.734375-3.761718-6.1875-5.40625-9.949219-3.671875zm0 0"/><path d="m121.207031 418.097656-16.253906-1.398437-6.351563-15.027344c-2.203124-5.214844-7.285156-8.582031-12.945312-8.582031s-10.742188 3.367187-12.945312 8.582031l-6.351563 15.027344-16.257813 1.398437c-5.640624.484375-10.414062 4.273438-12.164062 9.660156-1.746094 5.382813-.113281 11.257813 4.164062 14.960938l12.332032 10.6875-3.695313 15.890625c-1.28125 5.515625.847657 11.226563 5.429688 14.554687 4.578125 3.324219 10.667969 3.585938 15.515625.664063l13.972656-8.425781 13.972656 8.425781c2.242188 1.355469 4.753906 2.023437 7.257813 2.023437 2.90625 0 5.800781-.902343 8.257812-2.6875 4.582031-3.328124 6.710938-9.039062 5.429688-14.554687l-3.695313-15.890625 12.332032-10.6875c4.277343-3.707031 5.910156-9.578125 4.160156-14.960938-1.746094-5.382812-6.523438-9.175781-12.164063-9.660156zm-14.582031 24.34375c-3.953125 3.421875-5.671875 8.710938-4.488281 13.804688l3.320312 14.269531-12.542969-7.566406c-4.476562-2.699219-10.039062-2.699219-14.515624 0l-12.542969 7.566406 3.320312-14.269531c1.183594-5.09375-.535156-10.382813-4.488281-13.804688l-11.070312-9.59375 14.59375-1.25c5.210937-.449218 9.707031-3.71875 11.746093-8.53125l5.699219-13.496094 5.703125 13.496094c2.035156 4.8125 6.535156 8.082032 11.742187 8.53125l14.59375 1.253906zm0 0"/><path d="m222.292969 418.097656-16.257813-1.398437-6.351562-15.027344c-2.203125-5.214844-7.285156-8.582031-12.945313-8.582031-5.660156 0-10.742187 3.367187-12.945312 8.582031l-6.351563 15.027344-16.253906 1.398437c-5.640625.484375-10.417969 4.273438-12.164062 9.660156-1.75 5.382813-.117188 11.257813 4.160156 14.960938l12.332031 10.6875-3.695313 15.890625c-1.28125 5.515625.851563 11.226563 5.429688 14.554687 2.457031 1.785157 5.351562 2.6875 8.257812 2.6875 2.503907 0 5.015626-.667968 7.261719-2.023437l13.96875-8.425781 13.972657 8.425781c4.847656 2.925781 10.9375 2.664063 15.519531-.664063 4.578125-3.328124 6.710937-9.039062 5.425781-14.554687l-3.695312-15.890625 12.332031-10.6875c4.277343-3.707031 5.914062-9.578125 4.164062-14.960938-1.75-5.382812-6.527343-9.175781-12.164062-9.660156zm-14.585938 24.34375c-3.949219 3.421875-5.667969 8.714844-4.484375 13.804688l3.316406 14.269531-12.542968-7.566406c-4.476563-2.699219-10.035156-2.699219-14.515625 0l-12.542969 7.566406 3.320312-14.269531c1.183594-5.09375-.535156-10.382813-4.484374-13.804688l-11.074219-9.59375 14.597656-1.25c5.207031-.449218 9.707031-3.71875 11.742187-8.53125l5.703126-13.496094 5.699218 13.496094c2.035156 4.8125 6.535156 8.082032 11.742188 8.53125l14.59375 1.25zm0 0"/><path d="m323.375 418.097656-16.253906-1.398437-6.351563-15.027344c-2.207031-5.214844-7.289062-8.582031-12.949219-8.582031-5.660156 0-10.738281 3.367187-12.941406 8.582031l-6.351562 15.027344-16.257813 1.398437c-5.640625.484375-10.414062 4.273438-12.164062 9.660156-1.746094 5.382813-.113281 11.253907 4.164062 14.960938l12.332031 10.6875-3.695312 15.890625c-1.28125 5.515625.847656 11.226563 5.425781 14.554687 4.582031 3.328126 10.671875 3.585938 15.519531.664063l13.972657-8.425781 13.972656 8.425781c2.242187 1.355469 4.753906 2.023437 7.257813 2.023437 2.90625 0 5.800781-.902343 8.261718-2.6875 4.578125-3.328124 6.707032-9.039062 5.425782-14.554687l-3.695313-15.890625 12.332031-10.6875c4.277344-3.707031 5.910156-9.578125 4.164063-14.960938-1.75-5.382812-6.527344-9.175781-12.167969-9.660156zm-14.585938 24.34375c-3.949218 3.421875-5.667968 8.714844-4.480468 13.804688l3.316406 14.269531-12.542969-7.566406c-4.476562-2.699219-10.039062-2.699219-14.515625 0l-12.542968 7.5625 3.316406-14.265625c1.183594-5.089844-.535156-10.382813-4.484375-13.804688l-11.070313-9.59375 14.59375-1.253906c5.207032-.445312 9.707032-3.714844 11.742188-8.53125l5.703125-13.492188 5.699219 13.492188c2.035156 4.816406 6.535156 8.085938 11.742187 8.53125l14.597656 1.253906zm0 0"/><path d="m305.925781 367.820312c-.625-11.414062-3.429687-22.417968-8.359375-32.769531-1.78125-3.742187-6.253906-5.328125-9.996094-3.546875-3.738281 1.777344-5.324218 6.253906-3.546874 9.996094 3.9375 8.265625 6.238281 17.039062 6.859374 26.140625h-208.28125c1.765626-25.246094 16.5625-47.667969 38.722657-59.308594 1.957031 23.046875 15.84375 43.464844 37.179687 53.640625 1.453125.691406 3.007813 1.039063 4.554688 1.039063 1.957031 0 3.90625-.550781 5.628906-1.644531 3.117188-1.972657 4.96875-5.363282 4.953125-9.082032 0-11.039062 6.121094-20.71875 13.097656-20.71875 6.980469 0 13.101563 9.679688 13.101563 20.738282-.019532 3.695312 1.832031 7.082031 4.941406 9.058593 3.078125 1.953125 6.886719 2.183594 10.195312.609375 21.023438-10.027344 35.164063-30.691406 37.164063-53.65625 5.742187 3.015625 11.050781 6.792969 15.871094 11.304688 1.445312 1.355468 3.285156 2.023437 5.121093 2.023437 2.003907 0 4.003907-.796875 5.480469-2.375 2.832031-3.023437 2.671875-7.769531-.351562-10.601562-7.917969-7.410157-16.945313-13.191407-26.882813-17.222657-1.734375-9.355468-5.6875-17.722656-11.699218-24.71875 20.816406-15.558593 33.09375-39.84375 33.125-66.050781h8.710937c7.300781 0 14.109375-2.894531 19.179687-8.148437 5.066407-5.25 7.714844-12.164063 7.457032-19.46875-.25-7.160156-3.472656-13.640625-8.464844-18.304688 8.929688-18.269531 25.308594-58.136718 12.109375-82.230468-6.253906-11.410157-17.113281-15.800782-26.425781-17.335938-10.996094-22.265625-28.328125-38.445312-50.34375-46.9375-22.839844-8.808594-48.5625-8.535156-74.386719.796875-27.054687 9.777344-53.574219 7.390625-78.820313-7.085937-4.222656-2.425782-9.148437-2.609376-13.515624-.5-4.640626 2.242187-7.886719 6.773437-8.691407 12.105468-2.367187 15.628906-3.367187 34.925782-2.75 52.941406.144531 4.140626 3.640625 7.382813 7.753907 7.238282 4.140624-.144532 7.378906-3.613282 7.238281-7.753906-.835938-24.332032 1.53125-43.195313 2.589843-50.1875.046876-.304688.140626-.519532.222657-.652344 29.160156 16.613281 59.792969 19.304687 91.070312 8.003906 45.800781-16.554688 89.109375.335938 107.761719 42.027344 1.117188 2.496094 3.503906 4.1875 6.230469 4.410156 9.414062.777344 15.597656 4.09375 18.910156 10.136719 8.265625 15.09375-.917969 44.914062-12.285156 68.152343-1.71875-.34375-3.488281-.523437-5.300781-.523437h-8.25v-4.5625c0-19.402344-8.683594-37.519531-23.8125-49.699219-6.390626-5.164062-15.460938-5.761718-22.582032-1.488281-11.953125 7.171875-25.671875 10.960937-39.671875 10.960937s-27.714843-3.792968-39.671875-10.960937c-7.117187-4.269531-16.191406-3.671875-22.570312 1.476563-15.140625 12.191406-23.824219 30.308593-23.824219 49.710937v4.5625h-8.25c-.691406 0-1.375.023437-2.054687.078125-7.617188-14.453125-12.984376-32.15625-15.984376-52.722656-.597656-4.097656-4.394531-6.933594-8.503906-6.339844-4.101562.601562-6.9375 4.40625-6.339844 8.503906 3.132813 21.46875 8.730469 40.214844 16.679688 55.851563-6.359375 4.703125-10.609375 12.0625-10.894531 20.316406-.261719 7.308594 2.386719 14.226563 7.457031 19.480469 5.066406 5.253906 11.878906 8.148437 19.179688 8.148437h8.707031c.035156 26.21875 12.324219 50.511719 33.15625 66.070313-6.035157 6.914062-10.023438 15.300781-11.75 24.714844-31.367188 12.753906-52.628907 42.550781-54.515625 76.355468-37.421875 2.636719-67.058594 33.921875-67.058594 72 0 39.800782 32.378906 72.179688 72.179688 72.179688h228.117187c39.800781 0 72.179687-32.378906 72.179687-72.179688 0-38.070312-29.636718-69.359375-67.050781-71.996094zm-146.746093-22.617187c-15.265626-9.871094-24.140626-27.175781-22.992188-45.734375.035156-.5625.078125-1.117188.132812-1.667969.011719-.097656.019532-.195312.027344-.292969.210938-2.015624.542969-3.957031 1.003906-5.824218 4.730469 15.273437 16.367188 27.539062 31.238282 33.132812-4.773438 5.082032-8.15625 12.183594-9.410156 20.386719zm64.246093-68.984375c-.050781.261719 1.085938 14.300781-10.738281 26.140625-6.9375 6.929687-16.152344 10.746094-25.949219 10.746094-20.230469 0-36.6875-16.460938-36.6875-36.691407v-.195312c20.816407 9.25 50.40625 10.050781 73.375 0zm-9.121093 68.96875c-1.246094-8.179688-4.625-15.273438-9.394532-20.355469 6.816406-2.554687 13.074219-6.5625 18.382813-11.867187 6.027343-6.035156 10.382812-13.292969 12.832031-21.210938.433594 1.773438.757812 3.609375.96875 5.503906.011719.269532.039062.535157.082031.796876.140625 1.511718.210938 3.054687.210938 4.640624 0 17.191407-8.878907 33.234376-23.082031 42.492188zm-98.632813-144.621094v-7.390625c0-4.140625-3.359375-7.496093-7.5-7.496093h-16.210937c-3.1875 0-6.167969-1.269532-8.386719-3.566407-2.214844-2.296875-3.371094-5.324219-3.257813-8.535156.214844-6.1875 5.644532-11.21875 12.105469-11.21875h15.75c4.140625 0 7.5-3.359375 7.5-7.5v-12.0625c0-14.835937 6.644531-28.699219 18.242187-38.035156 1.53125-1.238281 3.667969-1.351563 5.4375-.289063 14.285157 8.566406 30.671876 13.097656 47.386719 13.097656 16.714844 0 33.101563-4.53125 47.386719-13.097656 1.769531-1.0625 3.90625-.949218 5.449219.300782 11.585937 9.324218 18.234375 23.1875 18.234375 38.023437v12.0625c0 4.140625 3.355468 7.5 7.5 7.5h15.746094c6.460937 0 11.890624 5.03125 12.105468 11.21875v.007813c.113282 3.203124-1.042968 6.230468-3.257812 8.527343-2.21875 2.296875-5.195313 3.5625-8.386719 3.5625h-16.210937c-4.140626 0-7.5 3.359375-7.5 7.5v7.390625c0 37.640625-30.535157 67.617188-67.617188 67.617188-8.496094-.027344-25.1875 1.085937-43.566406-10.796875-19.378906-12.53125-30.949219-33.773438-30.949219-56.820313zm185.128906 296.433594h-228.121093c-31.527344 0-57.179688-25.648438-57.179688-57.179688 0-31.527343 25.652344-57.179687 57.179688-57.179687.101562 0 224.601562.003906 228.117187 0 31.53125 0 57.179687 25.652344 57.179687 57.179687 0 31.53125-25.648437 57.179688-57.175781 57.179688zm0 0"/></svg>
                        <h1 class="counter-value" data-count="<?php echo e($total_customer= $totalProducts_AND_totalCustomer->total_customer < 190 ? 200 : $totalProducts_AND_totalCustomer->total_customer); ?>"><?php echo e($total_customer); ?></h1><span> +</span>
                        <p>clients satisfaits</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pa-counter-box">
                        <i class="fab fa-product-hunt" style="font-size: 60px;color:#6caaa8"></i>
                        <br>
                        <h1 class="counter-value" data-count="<?php echo e($total_products = $totalProducts_AND_totalCustomer->total_customer < 38 ? 40 : $totalProducts_AND_totalCustomer->total_customer); ?>"><?php echo e($total_products); ?></h1><span> +</span>
                        <p>products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pa-counter-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-38 0 512 512.00142">
                            <path d="M 435.488281 138.917969 L 435.472656 138.519531 C 435.25 133.601562 435.101562 128.398438 435.011719 122.609375 C 434.59375 94.378906 412.152344 71.027344 383.917969 69.449219 C 325.050781 66.164062 279.511719 46.96875 240.601562 9.042969 L 240.269531 8.726562 C 227.578125 -2.910156 208.433594 -2.910156 195.738281 8.726562 L 195.40625 9.042969 C 156.496094 46.96875 110.957031 66.164062 52.089844 69.453125 C 23.859375 71.027344 1.414062 94.378906 0.996094 122.613281 C 0.910156 128.363281 0.757812 133.566406 0.535156 138.519531 L 0.511719 139.445312 C -0.632812 199.472656 -2.054688 274.179688 22.9375 341.988281 C 36.679688 379.277344 57.492188 411.691406 84.792969 438.335938 C 115.886719 468.679688 156.613281 492.769531 205.839844 509.933594 C 207.441406 510.492188 209.105469 510.945312 210.800781 511.285156 C 213.191406 511.761719 215.597656 512 218.003906 512 C 220.410156 512 222.820312 511.761719 225.207031 511.285156 C 226.902344 510.945312 228.578125 510.488281 230.1875 509.925781 C 279.355469 492.730469 320.039062 468.628906 351.105469 438.289062 C 378.394531 411.636719 399.207031 379.214844 412.960938 341.917969 C 438.046875 273.90625 436.628906 199.058594 435.488281 138.917969 Z M 384.773438 331.523438 C 358.414062 402.992188 304.605469 452.074219 220.273438 481.566406 C 219.972656 481.667969 219.652344 481.757812 219.320312 481.824219 C 218.449219 481.996094 217.5625 481.996094 216.679688 481.820312 C 216.351562 481.753906 216.03125 481.667969 215.734375 481.566406 C 131.3125 452.128906 77.46875 403.074219 51.128906 331.601562 C 28.09375 269.097656 29.398438 200.519531 30.550781 140.019531 L 30.558594 139.683594 C 30.792969 134.484375 30.949219 129.039062 31.035156 123.054688 C 31.222656 110.519531 41.207031 100.148438 53.765625 99.449219 C 87.078125 97.589844 116.34375 91.152344 143.234375 79.769531 C 170.089844 68.402344 193.941406 52.378906 216.144531 30.785156 C 217.273438 29.832031 218.738281 29.828125 219.863281 30.785156 C 242.070312 52.378906 265.921875 68.402344 292.773438 79.769531 C 319.664062 91.152344 348.929688 97.589844 382.246094 99.449219 C 394.804688 100.148438 404.789062 110.519531 404.972656 123.058594 C 405.0625 129.074219 405.21875 134.519531 405.453125 139.683594 C 406.601562 200.253906 407.875 268.886719 384.773438 331.523438 Z M 384.773438 331.523438 "/>
                            <path d="M 217.996094 128.410156 C 147.636719 128.410156 90.398438 185.652344 90.398438 256.007812 C 90.398438 326.367188 147.636719 383.609375 217.996094 383.609375 C 288.351562 383.609375 345.59375 326.367188 345.59375 256.007812 C 345.59375 185.652344 288.351562 128.410156 217.996094 128.410156 Z M 217.996094 353.5625 C 164.203125 353.5625 120.441406 309.800781 120.441406 256.007812 C 120.441406 202.214844 164.203125 158.453125 217.996094 158.453125 C 271.785156 158.453125 315.546875 202.214844 315.546875 256.007812 C 315.546875 309.800781 271.785156 353.5625 217.996094 353.5625 Z M 217.996094 353.5625 "/>
                            <path d="M 254.667969 216.394531 L 195.402344 275.660156 L 179.316406 259.574219 C 173.449219 253.707031 163.9375 253.707031 158.070312 259.574219 C 152.207031 265.441406 152.207031 274.953125 158.070312 280.816406 L 184.78125 307.527344 C 187.714844 310.460938 191.558594 311.925781 195.402344 311.925781 C 199.246094 311.925781 203.089844 310.460938 206.023438 307.527344 L 275.914062 237.636719 C 281.777344 231.769531 281.777344 222.257812 275.914062 216.394531 C 270.046875 210.523438 260.535156 210.523438 254.667969 216.394531 Z M 254.667969 216.394531 "/>
                            </svg>
                        <h1 class="counter-value" data-count="100">0</h1><span> %</span>
                        <p>Pureté du produits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- counter end -->
<?php echo $__env->make('success.success-pyment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/home.blade.php ENDPATH**/ ?>