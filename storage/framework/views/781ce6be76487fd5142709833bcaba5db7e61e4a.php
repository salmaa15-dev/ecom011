<?php $__env->startSection('select2-style'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<div>
    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title d-inline">Search..</h4>
            <button id="all" wire:click="all" class="btn-sm btn-info float-right mb-3"><i class="fas fa-redo-alt"></i> all</button>
            <div class="form-row mt-3" wire:ignore>
                <select multiple id="customer" class="form-control" wire:model="type">
                    <?php $__currentLoopData = Constant::customerByType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option  value="<?php echo e($item['customer']); ?>">
                            <?php echo e($item['customer']); ?>

                        </option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>
        </div><!--end card-body-->
    </div>
    <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="card alert mt-3 alert  <?php echo e($customer->properties['color'] ?? ''); ?>" role="alert">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="badge badge-pill badge-success float-right mr-2">Order Date &nbsp;<?php echo e($customer->created_at->diffForHumans()); ?></h6>
                    <h6 class="badge badge-pill badge-dark float-right mr-2">Qty: <?php echo e($qty = $customer->orders->sum('pivot.qty')); ?> piece<?php echo e($qty > 1 ? 's' : ''); ?></h6>
                    <h6 class="badge badge-pill badge-danger float-right mr-2"><?php echo e($customer->properties['customer'] ?? ''); ?></h6>
                </div>
            </div>
        
            <div class="card-body">
                <div class="dropdown d-inline-block float-right">
                    <a class="nav-link dropdown-toggle mr-n2 mt-n2" id="drop2" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fas fa-ellipsis-v text-dark"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="drop2">
                        <a class="dropdown-item" href="<?php echo e(route('admin.order', ['id' => $customer->id, 'name' => $customer->name])); ?>"> <i class="fas fa-eye text-info"></i> Détails de la commande</a>
                        <form 
                            id="remove" 
                            action="<?php echo e(route('admin.destroy_customer', ['id' => $customer->id])); ?>" 
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure you want to remove this customer <?php echo e($customer->name); ?>')"><i class="ti-trash text-danger"></i> Supprimer customer</button>
                        </form>
                        <div class="container" style="cursor: pointer;">
                            <?php $__currentLoopData = Constant::customerByType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span class="bg-lg badge <?php echo e($item['color']); ?> d-block mt-1" wire:click="change(<?php echo e($customer->id); ?>, <?php echo e(json_encode($item)); ?>)">
                                    <?php echo e($item['customer']); ?>

                                </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div><!--end dropdown-->
                <span class="font-weight-bold"><?php echo e($customer->name); ?></span>
                <br>
                <span class="font-weight-bold">Total orders: <?php echo e(int_to_decimal($customer->total_order)); ?> <?php echo e($currency); ?><i class="mdi mdi-cart-outline"></i></span>
                <div class="row justify-content-center">
                    <div class="col-md-12 align-self-center">
                        <ul class="list-inline mb-0"> 
                            <li class="list-item d-inline-block mr-2">
                                Mobile: <span class="font-weight-bold"> <?php echo e($customer->mobile); ?></span>
                            </li>
                            <li class="list-item d-inline-block mr-2">
                                Email: <span class="font-weight-bold"> <?php echo e($customer->email); ?></span>
                            </li>
                            <li class="list-item d-inline-block mr-2">
                                Adresse de livraison: <span class="font-weight-bold"> <?php echo e($customer->address); ?></span>
                            </li>
                             <li class="list-item">
                                City:   <span class="font-weight-bold"> <?php echo e($customer->city); ?></span>
                            </li>
                            <li class="list-item">
                                Country:   <span class="font-weight-bold"> <?php echo e($customer->country); ?></span>
                            </li>
                           
                        </ul>
                    </div><!--end col-->
                    <div class="col-12 align-self-center img-group">
                        <?php $__currentLoopData = $customer->orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="user-avatar user-avatar-group float-right" href="#">
                                <img src="<?php echo e($item->logo_urls); ?>" alt="user" class="rounded-circle">
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-->
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h3 class="text-center">NO CUSTOMERS YET</h3>
    <?php endif; ?>
</div>

<?php $__env->startSection('select2-script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#customer').select2();
        $('#customer').on('change', function(){
            window.livewire.find('<?php echo e($_instance->id); ?>').type = $(this).val();
        });

        $('#all').click(function() {
            $('#customer').val(null).trigger('change');
        });
    });
</script>
<?php $__env->stopSection(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\livewire\customers.blade.php ENDPATH**/ ?>