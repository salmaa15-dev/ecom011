<div wire:click="shop" class="pa-blog-view text-center">

    <a href="javascript: void(0);"  class="mr-4">Ajouter au panier <i class="fas fa-shopping-cart"></i></a>     

    <div wire:loading wire:target="shop" style="margin-left: 5px">

        <?php echo $__env->make('loader.loader-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     </div>  

</div><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/livewire/shop.blade.php ENDPATH**/ ?>