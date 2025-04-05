
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                 <?php $__currentLoopData = $packs->take(1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>" onclick="location.href='<?php echo e(route('details', ['slug' => $item->slug])); ?>'">
                        <img class="image-fluid" style="height: 300px;object-fit: cover;" src="<?php echo e(asset(Constant::Storage.$item->logo_urls)); ?>" alt="<?php echo e($item->title); ?>">
                    </div>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
        </div>
 <?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views/front-end/partials/header/header-web.blade.php ENDPATH**/ ?>