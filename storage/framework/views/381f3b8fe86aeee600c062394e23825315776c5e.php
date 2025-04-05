
<?php $__env->startSection('content'); ?>
<div class="row">
   
    <div class="col-md-12">
        <div class="card">
             <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card-body">        
                <h4 class="mt-0 header-title">Settings Site</h4>
                    <?php if($setting): ?>
                    <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#Email" role="tab"><i class="fas fa-envelope"></i> Email</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Phone" role="tab"><i class="fas fa-phone-square"></i> Phone</a>
                            </li>                                                
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Instagram" role="tab"><i class="fab fa-instagram"></i> Instagram</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Facebook" role="tab"><i class="fab fa-facebook-f"></i> Facebook</a>
                            </li>                                                
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#Map" role="tab"><i class="fas fa-map-marker-alt"></i> Map</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#title" role="tab">Title</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#adresse" role="tab">Adresse</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#description" role="tab">Description</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane p-3" id="title" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <?php echo e($title); ?>
                                </p>
                            </div>
                            <div class="tab-pane active p-3" id="Email" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <?php echo e($email); ?>
                                </p>
                            </div>
                            <div class="tab-pane p-3" id="Phone" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <?php echo e($phone); ?>
                                </p>
                            </div>                                                
                            <div class="tab-pane p-3" id="Instagram" role="tabpanel">
                                <p class="text-muted mb-0">
                                    <i class="fab fa-instagram"></i> <a href="<?php echo e($instagram); ?>"><?php echo e($instagram); ?></a>
                                </p>
                            </div>
                            <div class="tab-pane p-3" id="Facebook" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <i class="fab fa-facebook-f"></i> <a href="<?php echo e($facebook); ?>"><?php echo e($facebook); ?></a>
                                </p>
                            </div>
                            <div class="tab-pane p-3 row" id="Map" role="tabpanel">
                                <div class="col-md-12">
                                    <div class="pa-contact-map">
                                        <iframe src="<?php echo e($map); ?>" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane p-3" id="adresse" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <?php echo e($setting->adresse); ?>
                                </p>
                            </div>
                            <div class="tab-pane p-3" id="description" role="tabpanel">
                                <p class="mb-0 text-muted">
                                    <?php echo e($description); ?>
                                </p>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-md-6">
                                <label>Logo NavBar</label>
                                <?php if($setting->logo1 != null): ?>
                                    <form action="<?php echo e(route('admin.drop.nav')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
                                        <button class="btn btn-sm btn-dark btn-block mt-2"><i class="ti-trash"></i></button>
                                    </form>
                                <?php endif; ?>
                                <br>
                                <img src="<?php echo e($logo_nav_bar); ?>" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <label>Logo Footer</label>
                                <?php if($setting->logo2 != null): ?>
                                    <form action="<?php echo e(route('admin.drop.footer')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PATCH'); ?>
                                        <input type="hidden" name="id" value="<?php echo e($setting->id); ?>">
                                        <button type="submit" class="btn btn-sm btn-dark btn-block mt-2"><i class="ti-trash"></i></button>    
                                    </form>
                                <?php endif; ?>  
                                <br>
                                <img src="<?php echo e($logo_footer); ?>" class="img-fluid">
                            </div>
                        </div>
                        <a href="<?php echo e(route('admin.settings.edit', ['setting' => $setting->id])); ?>" class="float-right btn btn-sm btn-info">Change info</a>  
                        <form action="<?php echo e(route('admin.settings.destroy', ['setting' => $setting->id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Back Default Setting</button>
                        </form> 
                    <?php else: ?>
                        <h4 class="text-center">
                            <a href="<?php echo e(route('admin.settings.create')); ?>">Add Settings for web site</a>
                        </h4>
                    <?php endif; ?>
            </div><!--end card-body-->
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\settings-site\show-settings.blade.php ENDPATH**/ ?>