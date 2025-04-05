<?php if($paginator->hasPages()): ?>
    <ul class="pagination pagination-rounded justify-content-center mt-4">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="page-item disabled"><a href="javascript:;" wire:click="previousPage" class="page-link">Prev</a></li>
        <?php else: ?>
        <li class="page-item"><a href="javascript:;" wire:click="previousPage" rel="prev" class="page-link">Prev</a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li class="page-item disabled"><a class="page-link"><span><?php echo e($element); ?></span></a></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page=>$url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="page-item active" aria-current="page"><a href="javascript:;" wire:click="gotoPage(<?php echo e($page); ?>)" class="page-link"><span><?php echo e($page); ?></span></a></li>
                    <?php else: ?>
                    <li class="page-item"><a href="javascript:;" wire:click="gotoPage(<?php echo e($page); ?>)" class="page-link"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li class="page-item"><a href="javascript:;" wire:click="nextPage" class="page-link">Next</a></li>
        <?php else: ?>
          <li class="page-item disabled"><a href="javascript:;" class="page-link">Next</a></li>
        <?php endif; ?>
    </ul>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\livewire-pagination-links.blade.php ENDPATH**/ ?>