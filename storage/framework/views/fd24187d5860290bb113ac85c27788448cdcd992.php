<div class="pa-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">Meilleurs Produits</h2>
                    <ul>
                        <?php $__currentLoopData = $categorysByPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                            <a href="<?php echo e(route('productByCategory', ['productBycategory' => $item->slug])); ?>"><?php echo e($item->name); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">réseaux sociaux</h2>
                    <ul>
                        <li>
                            <a href="<?php echo e($facebook); ?>"><i class="fab fa-facebook-f"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="<?php echo e($instagram); ?>"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=<?php echo e($phone); ?>"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo e($email); ?>"><i class="far fa-envelope"></i> <?php echo e($email); ?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">À propos</h2>
                    <ul>
                       <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('aprops',['page' => $page->slug])); ?>"><?php echo e($page->slug); ?></a>
                        </li>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="pa-foot-box pa-foot-subscribe">
                <img src="<?php echo e($logo); ?>" data-original="<?php echo e($logo_footer); ?>" width="110px" alt="image" class="lazy img-fluid"/>
                <p><?php echo e($description); ?></p>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/front-end/partials/footer.blade.php ENDPATH**/ ?>