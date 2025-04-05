<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-body">        
        <h4 class="mt-0 header-title text-center">All contacts</small></h4>
        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="toast fade show" style="max-width: 100%" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast">
                <div class="toast-header">
                    <a href="mailto:<?php echo e($contact->email); ?>" class="badge badge-pill badge-info"><?php echo e($contact->email); ?></a>
                    <form action="<?php echo e(route('admin.notification', ['id' => $contact->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                    </form>
                </div>
                
                <div class="toast-body">
                    <strong>Name:</strong>
                    <strong class="text-info"><?php echo e($contact->name); ?></strong>
                    <br>
                    <strong>Subject:</strong>
                    <?php echo e($contact->subject); ?>

                    <br>
                    <strong>Message:</strong>
                    <?php echo e($contact->message); ?>

                    <br>
                    <small class="float-right badge badge-pill badge-dark mb-3"><?php echo e(Carbon\Carbon::parse($contact->created_at)->toFormattedDateString()); ?></small>
                </div>
            </div> <!--end toast-->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="d-flex">
            <div class="mx-auto">
                <?php echo e($contacts->links("pagination::bootstrap-4")); ?>

            </div>
        </div>
    </div><!--end card-body-->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\contact\list-contacts.blade.php ENDPATH**/ ?>