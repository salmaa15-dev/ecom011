<a href="<?php echo e(route('cart')); ?>">
    <?php echo $__env->make('front-end.partials.cart-logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if($this->qty): ?>
        <span><?php echo e($this->qty); ?></span>
    <?php endif; ?>
</a><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\livewire\cart-button.blade.php ENDPATH**/ ?>