<table id="tech-companies-1" class="table table-striped mb-0 text-center">
    <tbody>
        <?php $__empty_1 = true; $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td>
                    <?php echo e($country->country); ?>
                </td>

                <td>
                    <a href="<?php echo e(route('admin.countries.edit', ['country' => $country->id])); ?>" class="mf-3"><i class="far fa-edit text-warning"></i></a>
                </td>
                <td>
                    <form action="<?php echo e(route('admin.countries.destroy', ['country' => $country->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-outline mt-1"><i class="ti-trash text-danger"></i></button>
                    </form>
                </td>
                <td>
                    <small class="badge badge-pill badge-dark"><?php echo e(Carbon\Carbon::parse($country->created_at)->toFormattedDateString()); ?></small>
                </td>
                <td class="float-right">
                    <form action="<?php echo e(route('admin.change')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <div class="switchToggle p-0">
                            <input type="hidden" name="id" value="<?php echo e($country->id); ?>">
                            <input type="checkbox" class="mt-1" id="<?php echo e($country->id); ?>" name="active" <?php echo e($country->active ? 'checked' : ''); ?> onchange="this.form.submit();">
                            <label style="margin-top: 10px" for="<?php echo e($country->id); ?>">Toggle</label>
                        </div>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-center"><a href="<?php echo e(route('admin.countries.index')); ?>">NO RUSLT SPECIFIED BUT YOU CAN TO SEE ALL CLICK RUSLT</a></p>
        <?php endif; ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\countries\data-countries.blade.php ENDPATH**/ ?>