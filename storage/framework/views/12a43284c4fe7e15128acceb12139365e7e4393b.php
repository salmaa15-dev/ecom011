<div class="pa-blog">
    <div class="container">
        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <hr data-content="<?php echo e($category->name); ?>" class="hr-text">
                <div class="row ">
                    <?php $__currentLoopData = $category->products->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key1 => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div id="te" class="col-lg-4 column mx-auto">
                            <div class="pa-blog-box">
                                <a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>">
                                    <img 
                                        src="<?php echo e($product->LogoUrls); ?>"
                                        class="image-fluid"/>
                                </a>
                            
                               <div class="pa-blog-title">
                                   <span class="text-danger float-right"><?php echo $product->percent; ?></span>
                                   <strong><a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>"><?php echo e($product->title); ?></a></strong>
                                   <br>
                                   <?php if($product->etat_sale && $product->sale > 0): ?>
                                       <strong><?php echo e(int_to_decimal($product->sale)); ?> <?php echo e($currency); ?></strong>
                                       &nbsp;
                                       <del class="text-danger strong"><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></del>
                                   <?php else: ?>
                                       <strong><?php echo e(int_to_decimal($product->price)); ?> <?php echo e($currency); ?></strong>
                                   <?php endif; ?>
                                   <br>
                                   <strong class="float-right"><?php echo e($product->view); ?> <i class="fas fa-eye text-info"></i> views</strong>
                               </div>
                                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('shop', ['productId' => $product->id])->html();
} elseif ($_instance->childHasBeenRendered($product->id.$product->slug)) {
    $componentId = $_instance->getRenderedChildComponentId($product->id.$product->slug);
    $componentTag = $_instance->getRenderedChildComponentTagName($product->id.$product->slug);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($product->id.$product->slug);
} else {
    $response = \Livewire\Livewire::mount('shop', ['productId' => $product->id]);
    $html = $response->html();
    $_instance->logRenderedChild($product->id.$product->slug, $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($category->products_count > 2): ?>
                        <div class="col-lg-12 text-center">
                            <a href="<?php echo e(route('productByCategory', ['productBycategory' => $category->slug])); ?>">View More <i class="fas fa-arrow-circle-right text-warning"></i></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <div class="col-md-12 text-center">
                  <a herf="#" class="f-25">There's no products yet</a>
              </div>
            
        <?php endif; ?>
    </div>
    <?php if($categories->count() != $cat_count): ?> 
       <div id="load-more" class="container">
        <div class="row" >
            <div class="col-lg-4 column mx-auto">
                <div class="pa-blog-box">

                    <div class="card">
                        <div class="header">
                          <div class="img"></div>
                        </div>
                        <div class="description">
                          <div class="line line-1"></div>
                          <div class="line line-2"></div>
                          <div class="line line-3"></div>
                        </div>
                        <div class="btns">
                          <div class="btn btn-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 column mx-auto">
                <div class="pa-blog-box">
                    
                    <div class="card">
                        <div class="header">
                        <div class="img"></div>
                        </div>
                        <div class="description">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        </div>
                        <div class="btns">
                        <div class="btn btn-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
     <?php endif; ?>

<script type="text/javascript">
window.addEventListener('load',function(){var x=document.getElementById('load-more');function loadEvent(){x.style.display=x.style.display=="block"?"none":"block"}setInterval(loadEvent,2500);var observer=new IntersectionObserver(function(entries){if(entries[0].isIntersecting===true)try{window.livewire.emit('load-more')}catch(error){console.log('..')}},{threshold:[1]});observer.observe(document.querySelector("#load-more"))})       
</script>
</div>
<?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\livewire\product.blade.php ENDPATH**/ ?>