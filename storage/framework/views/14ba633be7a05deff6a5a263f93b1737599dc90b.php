<div class="pa-bill-detail">
    <p class="pa-bill-title">Détails de la commande</p>
    <table>
        <tbody class="center-td">
            <tr class="pa-checkout-total">
                <td>montant total</td>
                <td colspan="2"  class="text-center">
                    <div wire:loading wire:target="remove">
                        <?php echo $__env->make('loader.loader-cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                     <?php echo e($total); ?> <strong><?php echo e($currency); ?></strong>
                </td>
            </tr>
        </tbody> 
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/livewire/cart.blade.php ENDPATH**/ ?>