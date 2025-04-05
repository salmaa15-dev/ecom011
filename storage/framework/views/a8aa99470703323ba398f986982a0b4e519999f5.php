<?php $__env->startSection('content'); ?>

<div class="container-fluid"> 

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    <h4 class="mt-0 header-title">Products</h4>

                    <div class="table-rep-plugin">

                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0 text-center">
                                <thead>
                                <tr>
                                    <th data-priority="6">Picture product</th>
                                    <th>Title</th>
                                    <th>Restart</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                            <td>

                                              <img src="<?php echo e($product->LogoUrls); ?>" width="55px">

                                            </td>

                                            <td><?php echo e($product->title_limit); ?></td>
                                            
                                            <td>
                                                <a id="all" href="<?php echo e(route('admin.products.products_restart', ['id' => $product->id])); ?>" class="btn-sm btn-info"><i class="fas fa-redo-alt"></i></a>
                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>

                        </div>

                        <div class="d-flex">

                            <div class="mx-auto">

                            

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div> <!-- end col -->

    </div> <!-- end row -->        

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/products/list-products-removed.blade.php ENDPATH**/ ?>