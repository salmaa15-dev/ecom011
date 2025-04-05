<div id="featured" class="carousel slide carousel" data-ride="carousel" data-interval="800">

    <!--dots navigate-->

    <ol class="carousel-indicators top-indicator">

        <li data-target="#featured" data-slide-to="0" class="active"></li>

        <li data-target="#featured" data-slide-to="1"></li>

        <li data-target="#featured" data-slide-to="2"></li>

    </ol>

    

    <!--carousel inner-->

    <div class="carousel-inner">

        <!--Item slider-->

        <?php $__currentLoopData = $packs->take(3)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!--Item slider-->
            <div class="carousel-item <?php echo e($key === 0 ? 'active': ''); ?>">

                <div class="card border-0 rounded-0  overflow zoom">

                    <div class="position-relative">

                        <!--thumbnail img-->

                        <div class="ratio_left-cover-1 image-wrapper">

                            <a href="<?php echo e(route('details', ['slug' => $pack->slug])); ?>">

                                <img class="img-fluid w-100"

                                    src=""

                                    alt="<?php echo e($pack->slug); ?>">

                            </a>

                        </div>

                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow font-weight-bold">

                            <!--title-->

                            <a href="<?php echo e(route('details', ['slug' => $pack->slug])); ?>">
                                <?php dump($pack->name); ?>
                                <strong class="p-1 badge badge-danger post-title my-1"><?php echo e(int_to_decimal($pack->price)); ?> <?php echo e($currency); ?></strong>

                            </a>

                            <!-- meta title -->

                            <div class="news-meta">

                                <strong class="text-black"><?php echo e($pack->title_limit); ?></strong>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        <!--end item slider-->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

    </div>

    <!--end carousel inner-->

</div>

<?php if($packs->count() > 3): ?>

    <div id="packs" class="float-right mr-10">

        <a href="<?php echo e(route('packs')); ?>">voir plus offres <i class="fas fa-arrow-circle-right text-warning"></i></a>

    </div>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\partials\header\header-mobile.blade.php ENDPATH**/ ?>