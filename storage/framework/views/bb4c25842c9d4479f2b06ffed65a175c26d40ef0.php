<?php $__env->startSection('content'); ?>

<div class="card">

        <div class="m-2">

            <strong class="badge badge-pill badge-dark"> Date creation<?php echo e(Carbon\Carbon::parse($product->created_at)->toFormattedDateString()); ?></strong>

            <strong class="badge badge-pill badge-info mr-2">Date the last update<?php echo e(Carbon\Carbon::parse($product->updated_at)->toFormattedDateString()); ?></strong>

        </div>

    <div class="card-body">   

        <div class="row">

            <div class="col-lg-6 mt-5">

                <img src="<?php echo e($product->LogoUrls); ?>" alt="<?php echo e($product->slug); ?>" class="img-fluid">

            </div><!--end col-->

            <div class="col-lg-6 align-self-center">

                <div class="single-pro-detail">

                    <p class="mb-1">Category : <?php echo e($product->category->name); ?></p>

                    <div class="custom-border"></div>

                    <h3 class="pro-title"><?php echo e($product->title); ?></h3>

                    <?php if($product->etat_sale && $product->sale > 0): ?>

                        <h2 class="pro-price"> <?php echo e($product->sale); ?> <?php echo e($currency); ?></h2> 

                        <strong class="float-right"> <?php echo $product->Percent; ?> Off</strong>

                    <br>

                        <del class="text-danger float-right"><?php echo e($product->price); ?> <?php echo e($currency); ?><i class="fas fa-times"></i></del>

                    <?php else: ?>

                        <h2 class="pro-price"><?php echo e($product->price); ?> <?php echo e($currency); ?></h2> 

                    <?php endif; ?>

                    <div class="row">

                        <div class="col-md-6">

                            <form action="<?php echo e(route('admin.active.discount')); ?>" method="GET">

                                <div class="switchToggle p-0">

                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                    <input type="checkbox" class="mt-1" id="etat_sale" name="etat_sale" <?php echo e($product->etat_sale ? 'checked' : ''); ?> onchange="this.form.submit();">

                                    <label for="etat_sale">Toggle</label> 

                                </div>

                            </form>

                        </div>

                        <div class="col-md-6">

                            <strong>reviews : (<?php echo e($product->view); ?> <i class="far fa-eye text-primary"></i>)</strong>

                        </div>

                    </div>

                    <h6 class="text-muted font-13">Description :</h6> 

                    <p class="text-muted mb-2"><?php echo e($product->description); ?></p>                                                               

                </div>

                <a href="<?php echo e(route('admin.products.edit', ['product' => $product->slug])); ?>" class="btn btn-soft-warning btn-block btn-round waves-effect waves-light"><i class="far fa-edit"></i> Edit</a>

                

                <form id="remove" action="<?php echo e(route('admin.products.destroy', ['product' => $product->id])); ?>" method="POST">

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>

                    <button type="submit"  class="btn btn-soft-danger btn-block btn-round waves-effect waves-light mt-2" onclick="return confirm('Are you sure you want to remove this product <?php echo e($product->title); ?>')">remove product</button>

                </form>
                <a href="<?php echo e(route('admin.products.index')); ?>" class="btn btn-primary btn-block report-btn float-right mf-5 mt-5"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to products</a>

            </div><!--end col-->                                            

        </div><!--end row-->

    </div><!--end card-body-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/products/show-product.blade.php ENDPATH**/ ?>