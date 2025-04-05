<?php $__env->startSection('content'); ?>

<div class="card">

    <div class="m-2">

        <strong class="badge badge-pill badge-dark"> Date creation<?php echo e(Carbon\Carbon::parse($pack->created_at)->toFormattedDateString()); ?></strong>

        <strong class="badge badge-pill badge-info mr-2">Date the last update<?php echo e(Carbon\Carbon::parse($pack->updated_at)->toFormattedDateString()); ?></strong>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-lg-6 mt-5">

                <img src="<?php echo e($pack->LogoUrls); ?>" alt="<?php echo e($pack->slug); ?>" class="img-fluid">

            </div><!--end col-->

            <div class="col-lg-6 align-self-center">

                <div class="single-pro-detail">

                    <h3 class="pro-title"><?php echo e($pack->title); ?></h3>

                    <h2 class="pro-price"><?php echo e(int_to_decimal($pack->price)); ?> <?php echo e($currency); ?></h2>



                    <div class="row">

                        <div class="col-sm-6">

                            <?php if($pack->available_pack): ?>

                                <label class="text-success"><i class="fas fa-check"></i> Available</label>

                            <?php else: ?>

                                <label class="text-danger"><i class="fas fa-times"></i> Unavailable</label>

                            <?php endif; ?>

                            &nbsp;

                            <form action="<?php echo e(route('admin.active.available_pack')); ?>" method="GET">

                                <div class="switchToggle p-0">

                                    <input type="hidden" name="id" value="<?php echo e($pack->id); ?>">

                                    <input type="checkbox" class="mt-1" id="<?php echo e($pack->id); ?>" name="available" <?php echo e($pack->available_pack ? 'checked' : ''); ?> onchange="this.form.submit();">

                                    <label for="<?php echo e($pack->id); ?>">Toggle</label> 

                                </div>

                            </form>

                        </div>

                        <div class="col-sm-6">

                            <strong>reviews : (<?php echo e($pack->view); ?> <i class="far fa-eye text-primary"></i>)</strong>

                        </div>

                    </div>

                    <h6 class="text-muted font-13">Description :</h6> 

                    <p class="text-muted mb-2"><?php echo e($pack->description); ?></p>                                                               

                </div>

                <a href="<?php echo e(route('admin.packs.edit', ['pack' => $pack->slug])); ?>" class="btn btn-soft-warning  btn-block  btn-round waves-effect waves-light"><i class="far fa-edit"></i> Edit</a>



                <form id="remove" action="<?php echo e(route('admin.packs.destroy', ['pack' => $pack->id])); ?>" method="POST">

                    <?php echo csrf_field(); ?>

                    <?php echo method_field('DELETE'); ?>

                    <button type="submit"  class="btn btn-soft-danger btn-block btn-round waves-effect waves-light mt-2" onclick="return confirm('Are you sure you want to remove this pack <?php echo e($pack->title); ?>')">remove pack</button>

                </form>

            </div><!--end col-->                                            

        </div><!--end row-->

    </div><!--end card-body-->

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\packs\show-pack.blade.php ENDPATH**/ ?>