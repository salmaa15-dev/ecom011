<div>

    <div class="row">

        <div class="col-12">

            <div class="pa-cart-box">
                <?php if($this->products): ?>
                    <?php $__currentLoopData = $this->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mt-3">
                            <div class="card-body new-style-cards-body">
                               <div class="row">
                                   <div class="col-md-4 text-center">
                                        <img src="<?php echo e($logo); ?>" data-original="<?php echo e($product->image); ?>" alt="image" width="200" height="200" class="img-fluid"/>
                                   </div>
                                   <div class="col-md-8">
                                        <span class="mb-3 badge badge-secondary mt-1" style="font-size: 15px"> Le prix : <?php echo e($product->price); ?> <?php echo e($currency); ?></span>                                      
                                        <span class="mb-3 badge badge-secondary mt-1" style="font-size: 15px"> La quantités est <?php echo e($product->qty); ?></span>                                
                                        <div class="pa-cart-quantity float-right">
                                            <button wire:click="decrease(<?php echo e($product->id); ?>)" class="pa-sub"></button>
                                            <strong class="cart-qty"> <?php echo e($product->qty); ?></strong>
                                            <button wire:click="increase(<?php echo e($product->id); ?>)" class="pa-add"></button>
                                        </div>
                                        <hr class="hr-cart">
                                        <h4>Description</h4>
                                        <a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>">
                                            <p class="card-text"> <?php echo e($product->description); ?> </p>
                                        </a>
                                   </div>
                               </div>
                               <div class="card-footer drop-style mt-2">
                                    <div class="mt-3">
                                        <a href="<?php echo e(route('details', ['slug' => $product->slug])); ?>" class="text-info float-right">
                                            <i class="fas fa-eye text-info"></i>&nbsp; Plus Infos
                                        </a>
                                        <a href="#" wire:click="remove(<?php echo e($product->id); ?>)" class="float-right text-danger mr-3">
                                            <i class="fas fa-trash-alt"></i>&nbsp; <strong class="text-dark">Total: <?php echo e(int_to_decimal($product->total)); ?> <?php echo e($currency); ?></strong>
                                        </a>
                                    </div>
                              </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <table class="mt-3 new-style-cards-table">
                        <tbody>
                            <tr>
                                <td colspan="4" class="pa-cart-total">
                                    Montant total:
                                </td>
                                <td class="pa-cart-total-price">
                                   <p><?php echo e($this->total); ?> <?php echo e($currency); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="border: none" class="center-td"><a href="<?php echo e(route('brands')); ?>" class="pa-btn">Continuer vos achats</a></td>
                                <td style="border: none" class="center-td">
                                    <div><a href="<?php echo e(route('checkout')); ?>" class="pa-btn">CHECKOUT</a></div>   
                                </td>
                            </tr>
                        </tbody>
                    </table>
    
                <?php else: ?>
                    <h4 class="text-center">

                        <a href="<?php echo e(route('brands')); ?>" class="pa-btn">continue Shopping</a>

                    </h4> 
                <?php endif; ?>

            </div>

        </div>

    </div>
    <div class="pa-fixed-loading" wire:loading wire:target="decrease, increase, remove">
        <img src="<?php echo e(asset('front-end/assets/images/loading-qty.gif')); ?>" width="30px">
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\livewire\cart-g.blade.php ENDPATH**/ ?>