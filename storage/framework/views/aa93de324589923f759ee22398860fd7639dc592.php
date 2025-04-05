<?php $__env->startSection('content'); ?>

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">Products</h4>

                    <div class="table-rep-plugin">

                        <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="table-responsive mb-0" data-pattern="priority-columns">

                            <table id="tech-companies-1" class="table table-striped mb-0 text-center">

                                <thead>

                                <tr>

                                    <th data-priority="6">Details</th>

                                    <th>Picture</th>

                                    <th data-priority="1">Title</th>

                                    <th data-priority="3">Active reduction</th>

                                    <th data-priority="3">Price</th>

                                    <th data-priority="6">Category</th>

                                    <th data-priority="6">Created</th>

                                </tr>

                                </thead>

                                <tbody>

                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td>

                                              <a href="<?php echo e(route('admin.products.show', ['product' => $product->slug])); ?>"><i class="fas fa-info-circle f-30 text-info"></i></a>

                                            </td>

                                            <th>

                                              <img src="<?php echo e($product->LogoUrls); ?>" width="55px">

                                            </th>

                                            <td><?php echo e($product->title_limit); ?></td>

                                            <td>

                                                <form action="<?php echo e(route('admin.active.discount')); ?>" method="GET">

                                                    <div class="switchToggle p-0">

                                                        <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                                        <input type="checkbox" class="mt-1" id="<?php echo e($product->id); ?>" name="etat_sale" <?php echo e($product->etat_sale ? 'checked' : ''); ?> onchange="this.form.submit();">

                                                        <label for="<?php echo e($product->id); ?>">Toggle</label> 

                                                        <?php if($product->etat_sale): ?>

                                                            <strong class="text-danger"><?php echo $product->percent; ?></strong>

                                                        <?php endif; ?>

                                                    </div>

                                                </form>

                                            </td>

                                            <td class="p-0">

                                              <?php if($product->etat_sale && $product->sale >0): ?>

                                                 <strong class="text-success"><?php echo e($product->sale); ?> <?php echo e($currency); ?> <i class="fas fa-check"></i></strong>

                                                <br>

                                                 <del class="text-danger"><?php echo e($product->price); ?> <?php echo e($currency); ?><i class="fas fa-times"></i></del>

                                                <?php else: ?>

                                                <strong><?php echo e($product->price); ?> <?php echo e($currency); ?></strong>

                                              <?php endif; ?>

                                            </td>

                                            <td><?php echo e($product->category->name); ?></td>

                                            <td>

												<small class="badge badge-pill badge-dark"><?php echo e(Carbon\Carbon::parse($product->created_at)->toFormattedDateString()); ?></small>

                                            </td>

                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                                <?php echo e($products->links("pagination::bootstrap-4")); ?>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\products\list-products.blade.php ENDPATH**/ ?>