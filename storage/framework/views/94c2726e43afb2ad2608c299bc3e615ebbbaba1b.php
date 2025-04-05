<?php $__env->startSection('content'); ?>

<div class="card">

    <div class="card-body">

        

        <h4 class="mt-0 header-title text-right">

            <span class="badge badge-pill badge-warning">Total orders &nbsp;<?php echo e($customer->orders->count()); ?></span>

            <span class="badge badge-pill badge-info">Full name &nbsp;<?php echo e($customer->name); ?></span>

            <span class="badge badge-pill badge-dark">Order Date &nbsp;<?php echo e($customer->created_at->diffForHumans()); ?></span>

            <span class="badge badge-pill badge-success font-weight-bold">Total orders: $<?php echo e(int_to_decimal($customer->total_order)); ?> <i class="mdi mdi-cart-outline"></i></span>

            <br>

        </h4>



        <div class="accordion" id="accordionExample">

            <?php $__currentLoopData = $customer->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card border mb-0 shadow-none">

                    <div class="card-header p-0" id="headingOne">

                        <h5 class="my-1">

                            <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                <?php echo e($order->title); ?> <small class="badge badge-pill badge-dark">Order #<?php echo e($key + 1); ?></small>

                            </button>

                        </h5>

                    </div>

                    <div id="collapseOne" class="collapse <?php echo e($key == 0 ? 'show': ''); ?>" aria-labelledby="headingOne" data-parent="#accordionExample">

                        <div class="card-body">

                            <table id="tech-companies-1" class="mb-2 text-center">

                                <tbody>

                                    <tr>

                                        <td>

                                            <img src="<?php echo e($order->logo_urls); ?>" alt="image" class="rounded-circle thumb-md mr-2">

                                        </td>

                                        <td>

                                            <span class="badge badge-pill badge-dark mr-2">Quantity <?php echo e($order->pivot->qty); ?></span>

                                        </td>

                                        <td>

                                            <span class="badge badge-pill badge-danger">Price <?php echo e(int_to_decimal($order->price_net)); ?> Euro</span>

                                        </td>

                                        <td>

                                           <?php if($order->pack): ?>

                                                <a href="<?php echo e(route('admin.packs.show', ['pack' => $order->slug])); ?>"><i class="fas fa-info-circle f-30 text-info mf-4"></i></a> 

                                           <?php else: ?> 

                                                <a href="<?php echo e(route('admin.products.show', ['product' => $order->slug])); ?>"><i class="fas fa-info-circle f-30 text-info mf-4"></i></a>

                                           <?php endif; ?>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                            <strong>Description:</strong>  

                            <p class="text-mutied">

                                <?php echo e($order->description); ?>


                            </p>

                        </div>

                    </div>

                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
    <a  href="<?php echo e(url()->previous()); ?>" style="text-align: center; margin:5px">
        <i aria-hidden="true" class="fas fa-fast-backward"></i>
        <span>Back</span>
    </a>
</div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\customers\orders\list-orders.blade.php ENDPATH**/ ?>