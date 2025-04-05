<?php $__env->startSection('title', 'Contact us'); ?>

<?php $__env->startSection('content'); ?>

      <!-- breadcrumb start -->

    <div class="pa-breadcrumb">

        <div class="container-fluid">

            <div class="pa-breadcrumb-box">

                <h1>CONTACTEZ-NOUS</h1>

                <ul>

                    <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>

                    <li>CONTACTEZ-NOUS</li>

                </ul>

            </div>

        </div>

    </div>

    <!-- breadcrumb end -->



    <!-- contact detail start -->

    <div class="pa-contact-detail">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Address</h4>

                        <p><?php echo e($adresse); ?></p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Contact us</h4>

                        <p><?php echo e($phone); ?></p>

                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="pa-contact-box">

                        <h4>Email</h4>

                        <p><?php echo e($email); ?></p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- contact detail end -->



    <!-- contact start -->

    <div class="pa-contact">

        <div class="container">

            <div class="row">

                <?php if($map): ?>

                    <div class="col-md-7">

                        <div class="pa-contact-map">

                            <iframe src="<?php echo e($map); ?>" aria-hidden="false" tabindex="0"></iframe>

                        </div>

                    </div>

                <?php endif; ?>

                <div class="col-md-<?php echo e($map ? 5 : 12); ?>">

                    <div class="<?php echo e($map ? 'pa-contact-form' : ''); ?>">

                        <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <form action="<?php echo e(route('create')); ?>" method="POST">

                            <?php echo csrf_field(); ?>

                            <input type="text" placeholder="Entrez votre nom" name="name" class="mt-2 form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>"/>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                                <span class="invalid-feedback mt-1" role="alert">

                                    <strong class="h6"><?php echo e($message); ?></strong>

                                </span>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            <input type="text"  placeholder="Entrez votre e-mail" name="email" class="mt-2 form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>"/>

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

                            <input type="text" placeholder="Entrez votre sujet" name="subject" class="mt-2 form-control <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('subject')); ?>"/>

                            <?php $__errorArgs = ['subject'];
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

                            <textarea placeholder="Message ici" rows="10" name="message" class="mt-2 form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"><?php echo e(old('message')); ?></textarea>

                            <?php $__errorArgs = ['message'];
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

                            <button type="submit" class="pa-btn submitForm mt-2 <?php echo e(!$map ? 'btn-block': ''); ?> ">Envoyer</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- contact end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\front-end\contact.blade.php ENDPATH**/ ?>