<?php $__env->startSection('content'); ?>

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">packs</h4>

                    <div class="table-rep-plugin">

                        <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="table-responsive mb-0" data-pattern="priority-columns">

                            <table id="tech-companies-1 text-center" class="table table-striped mb-0">

                                <thead>

                                <tr>

                                    <th data-priority="1">Details</th>

                                    <th>Picture</th>

                                    <th data-priority="1">Title</th>

                                    <th data-priority="3">Price</th>

                                    <th data-priority="6">Created</th>

                                    <th data-priority="6">available pack</th>

                                </tr>

                                </thead>

                                <tbody>

                                    <?php $__currentLoopData = $packs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td>

                                                <a href="<?php echo e(route('admin.packs.show', ['pack' => $pack->slug])); ?>"><i class="fas fa-info-circle f-30 text-info"></i></a>

                                            </td>

                                            <th>

                                                <img src="<?php echo e($pack->LogoUrls); ?>" width="55px">

                                            </th>

                                            <td><?php echo e($pack->TitleLimit); ?></td>

                                            <td class="p-0">

                                                 <strong class="text-success"><?php echo e($pack->price); ?> <?php echo e($currency); ?> <i class="fas fa-check"></i></strong>

                                            </td>

                                            <td>

                                                <small class="badge badge-pill badge-dark"><?php echo e(Carbon\Carbon::parse($pack->created_at)->toFormattedDateString()); ?></small>

                                            </td>

                                            <td>

                                                <form action="<?php echo e(route('admin.active.available_pack')); ?>" method="GET">

                                                    <div class="switchToggle p-0">

                                                        <input type="hidden" name="id" value="<?php echo e($pack->id); ?>">

                                                        <input type="checkbox" class="mt-1" id="<?php echo e($pack->id); ?>" name="available" <?php echo e($pack->available_pack ? 'checked' : ''); ?> onchange="this.form.submit();">

                                                        <label for="<?php echo e($pack->id); ?>">Toggle</label> 

                                                    </div>

                                                </form>

                                            </td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                               

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                                <?php echo e($packs->links("pagination::bootstrap-4")); ?>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\packs\list-pack.blade.php ENDPATH**/ ?>