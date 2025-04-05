<?php $__env->startSection('content'); ?>

     <!-- breadcrumb start -->

     <div class="pa-breadcrumb">

        <div class="container-fluid">

            <div class="pa-breadcrumb-box">

                <h1>Paniers de caisse</h1>

                <ul>

                    <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>

                    <li>paniers de caisse</li>

                </ul>

            </div>

        </div>

    </div>

    <!-- breadcrumb end -->
    <!-- checkout start -->

    <div class="pa-checkout spacer-bottom">

        <div class="container">

            <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('errors.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 

            

            <form method="POST">

                <?php echo csrf_field(); ?>

                <div class="row">

                    <div class="col-lg-5">

                        <div class="pa-bill-form">

                            <label class="pa-bill-title">Détails de la facturation</label>

                            <input type="text" name="name" class="mb-2 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('name')); ?>" placeholder="full name."/>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="tel" name="mobile" class="mb-2 <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('mobile')); ?>" placeholder="phone"/>

                            <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="email" name="email" class="mb-2 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('email')); ?>" placeholder="email"/>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <textarea type="text" name="address" class="textareacheckout mb-2 text-center <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" rows="5" required placeholder="Adresse de livraison"><?php echo e(old('address')); ?></textarea>

                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="text" name="country" list="Nationalite" class="mb-2 <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('country')); ?>" placeholder="country" id="nationalite">

                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <datalist id="Nationalite">

                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($item->country); ?>">

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </datalist>
                            
                            <input type="state" name="state" class="mb-2 <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('state')); ?>" placeholder="state"/>

                            <?php $__errorArgs = ['state'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                            <input type="City" name="city" class="mb-2 <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('city')); ?>" placeholder="city"/>

                            <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        
                            <input type="zip_code" name="zip_code" class="mb-2 <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required value="<?php echo e(old('zip_code')); ?>" placeholder="zip code"/>

                            <?php $__errorArgs = ['zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                    </div>

                    <div class="col-lg-7">

                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cart', [])->html();
} elseif ($_instance->childHasBeenRendered('bwiEHrT')) {
    $componentId = $_instance->getRenderedChildComponentId('bwiEHrT');
    $componentTag = $_instance->getRenderedChildComponentTagName('bwiEHrT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bwiEHrT');
} else {
    $response = \Livewire\Livewire::mount('cart', []);
    $html = $response->html();
    $_instance->logRenderedChild('bwiEHrT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                        <div class="pa-place-order-btn text-center">

                            <a href="<?php echo e(route('cart')); ?>" class="btn btn-link m-2">Continuer vos achats</a>
                           
                            <button type="submit"  formaction="<?php echo e(route('payment_with_transfer')); ?>"  class="pa-btn submitForm m-2"> Confirmer la commande <i class="fas fa-money-bill-wave"></i> </button>
                           
                            <button type="submit"  formaction="<?php echo e(route('payment_with_paypal')); ?>" class="pa-btn-pay submitForm m-2"> pay with Paypal <i class="fas fa-money-bill-wave"></i> </button>

                        </div>
                            <div class="pa-contact-map">
                                <iframe src="<?php echo e($map); ?>" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                    </div>

                </div>

            </form>

        </div>

    </div>

    <!-- checkout end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\checkout.blade.php ENDPATH**/ ?>