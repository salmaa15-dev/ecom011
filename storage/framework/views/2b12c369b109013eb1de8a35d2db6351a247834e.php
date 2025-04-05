<div class="row">

    <div class="col-md-12">

        <div class="card">

            <?php $__errorArgs = ['image'];
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

            <div class="card-body">        

                Picture Pack

                <input type="file" id="input-file-now-custom-2" name="image" class="dropify <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" data-default-file="<?php echo e($pack->LogoUrls ?? asset('back-end/assets/images/logo/pack-logo.png')); ?>" data-height="326" />

            </div><!--end card-body-->

        </div>

    </div>

    <div class="col-md-12">

        <div class="card">

            <div class="card-body">        

                <h4 class="mt-0 header-title">Create a new pack</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name Title picteur description ...</code></p>

                <dl class="row mb-0">

                    <dt class="col-sm-3">Title</dt>

                    <dd class="col-sm-9">

                        <input type="text" name="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('title', $pack->title ?? null)); ?>">

                        <?php $__errorArgs = ['title'];
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

                    </dd>

                    <dt class="col-sm-3">Description</dt>

                    <dd class="col-sm-9">

                        <textarea name="description" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" cols="30" rows="8"><?php echo e(old('description', $pack->description ?? null)); ?></textarea>

                        <?php $__errorArgs = ['description'];
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

                    </dd>

        

                    <dt class="col-sm-3">Price</dt>

                    <dd class="col-sm-9">

                        <div class="input-group">

                            <div class="input-group-prepend">

                                <span class="input-group-text"><?php echo e($currency); ?></span>

                            </div>

                            <input type="text" name="price" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder=".." value="<?php echo e(old('price', $pack->price ?? null)); ?>">

                            <?php $__errorArgs = ['price'];
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

                    </dd>

                    <dt class="col-sm-3 text-truncate">Available </dt>

                    <dd class="col-sm-9">

                        <div class="input-group-append">

                            <div class="switchToggle">

                                <input type="checkbox" name="available_pack" class="mt-1 <?php $__errorArgs = ['available_pack'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="switch" <?php echo e(old('available_pack', $pack->available_pack ?? 'checked' ) ? 'checked' : null); ?>>

                                <label for="switch">Toggle</label>

                            </div>

                        </div>

                    </dd>

                </dl>        

            </div><!--end card-body-->

        </div>

    </div>

</div>

<a href="<?php echo e(route('admin.packs.index')); ?>" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to packs</a><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\packs\form-pack.blade.php ENDPATH**/ ?>