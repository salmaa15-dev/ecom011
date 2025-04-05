<?php $__env->startSection('content'); ?>

    <div class="container-fluid"> 

        <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="row">

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Customers</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark"><?php echo e($CUSTOMERS); ?></h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="mdi mdi-account-multiple bg-soft-info"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Revenue</h4>

                                    <h2 class="mt-0 font-weight-bold f-30 text-dark"> <?php echo e($TOTAL_REVENUE); ?> <?php echo e($currency); ?></h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-money-bill-wave text-success"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                 <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->

            <div class="col-lg-4">

                <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Orders</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark"><?php echo e($TOTAL_ORDERS); ?></h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-shopping-cart bg-soft-danger"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div><!--end col-->                           

        </div><!--end row-->

        <div class="row">

            <div class="col-md-6">

                   <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Products</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark"><?php echo e($total_products); ?></h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="dripicons-basket bg-soft-dark"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                   <!--end card-body-->                                                                    

                </div><!--end card-->

            </div>

            <div class="col-md-6">

                   <div class="card">

                    <div class="card-body mb-0">

                        <div class="row">                                            

                            <div class="col-8 align-self-center">

                                <div class="">

                                    <h4 class="mt-0 header-title">Total Packs</h4>

                                    <h2 class="mt-0 font-weight-bold text-dark"><?php echo e($total_packs); ?></h2> 

                                </div>

                            </div><!--end col-->

                            <div class="col-4 align-self-center">

                                <div class="icon-info text-right">

                                    <i class="fas fa-shopping-bag bg-soft-warning"></i>

                                </div>

                            </div><!--end col-->

                        </div><!--end row-->

                    </div><!--end card-body-->

                    <!--end card-body-->                                                                    

                </div><!--end card-->

            </div>

        </div>

        <div class="card">

            <strong class="m-4">Statistics of orders per MONTH/YEAR</strong>

            <div class="card-body">   

                <form action="<?php echo e(route('admin.dashboard')); ?>" method="GET">         

                    <div class="input-group">

                    <select name="year" class="form-control">

                        <?php $__currentLoopData = $years; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                        <span class="input-group-append">

                            <button type="submit" class="btn btn-sm btn-info">YEARS</button>

                        </span> 

                    </div>

                </form>

                <br>

                <?php $__empty_1 = true; $__currentLoopData = $statistic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <dl class="row mb-0">

                        <dt class="col-sm-3"><small class="btn btn-dark btn-sm btn-round"><?php echo e($month->count()); ?></small><strong class="mf-4"><?php echo e($key); ?></strong></dt>

                        <dd class="col-sm-9">

                            <div class="progress mf-5 mt-3 hProgress">

                                <div class="progress-bar progress-bar-animated 

                                <?php echo e($month->count() < 20 ? 'bg-danger': ''); ?>


                                <?php echo e($month->count() >= 20 &&  $month->count() <= 50 ? 'bg-warning': ''); ?>


                                <?php echo e($month->count() >= 50 &&  $month->count() <= 100 ? 'bg-success': ''); ?>" 

                                role="progressbar" 

                                style="width: <?php echo e($month->count()); ?>%;border-radius: 10px;" 

                                aria-valuenow="80" 

                                aria-valuemin="0" 

                                aria-valuemax="100"><?php echo e($month->count()); ?> orders</div>

                            </div>

                        </dd>

                    </dl>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 

                    <h5 class="text-center">NO RUSLT</h5>

                <?php endif; ?>



            </div><!--end card-body-->

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/admin/dashboard.blade.php ENDPATH**/ ?>