<div class="row">

    <div class="col-md-8">

        <div class="card">

            <div class="card-body">        

                <h4 class="mt-0 header-title">Create a new category</h4>

                <p class="text-muted mb-4">Warning !, all fields must be required<code class="highlighter-rouge"> Name category logo description</code></p> 

                <dl class="row mb-0">

                    <dt class="col-sm-3">View In Home</dt>

                    <dd class="col-sm-9">

                        <div class="switchToggle">

                            <input type="checkbox" name="etat" class="mt-1" id="switch" <?php echo e(old('etat', $category->etat ?? null ) ? 'checked' : null); ?>>

                            <label for="switch">Toggle</label>

                        </div>

                    </dd>

                    <dt class="col-sm-3">Category name</dt>

                    <dd class="col-sm-9">

                        <input type="text" required class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name', $category->name ?? null)); ?>">

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

                    </dd>

    

                    <dt class="col-sm-3">Description</dt>

                    <dd class="col-sm-9">

                        <textarea required class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" rows="5" ><?php echo e(old('name', $category->description ?? null)); ?></textarea>

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

                </dl>

            </div><!--end card-body-->

        </div>

    </div>

    <div class="col-md-4">

        <div class="card">

            <div class="card-body">

                <h4 class="mt-0 header-title">Logo</h4>        

                <input type="file" id="input-file-now-custom-2" name="logo" class="dropify <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" data-default-file="<?php echo e($category->LogoUrls ?? asset('back-end/assets/images/logo/category-logo.jpg')); ?>" data-height="200" />

            </div>

        </div>

    </div>

</div>

<a href="<?php echo e(route('admin.categorys.index')); ?>" class="btn btn-primary report-btn float-right mf-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to categorys</a><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\categorys\form-category.blade.php ENDPATH**/ ?>