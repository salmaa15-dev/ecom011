<?php $__env->startSection('content'); ?>

<div class="container mb-5">

    <div class="modal-content col-lg-6 mx-auto my-style" style="border: none">

        <div class="modal-body">

           <div class="text-center mb-2">
                <img src="<?php echo e($logo); ?>" alt="Shop laayoune" width="130px" height="124px">
           </div>

            <form method="POST" action="<?php echo e(route('login')); ?>">

                <?php echo csrf_field(); ?>

                <div class="pa-login-form">

                    <input id="email" type="email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="Email">

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

    

                    <input id="password" type="password" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="password">

                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                            <span class="invalid-feedback" role="alert">

                                <strong class="h5"><?php echo e($message); ?></strong>

                            </span>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    

                    <div class="pa-remember">

                        <label class="float-left">Remember Me

                            <input  type="checkbox"  name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                            <span class="s_checkbox"></span>

                        </label>

                        <?php if(Route::has('password.request')): ?>

                            <a href="<?php echo e(route('password.request')); ?>" class="float-right">Forgot Password ?</a>

                        <?php endif; ?>

                    </div>

                    <div class="pa-login-btn text-center">

                        <button type="submit" class="pa-btn btn-block">

                            <?php echo e(__('Login')); ?>


                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\auth\login.blade.php ENDPATH**/ ?>