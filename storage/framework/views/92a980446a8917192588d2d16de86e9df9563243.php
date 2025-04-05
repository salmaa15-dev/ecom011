<?php $__env->startSection('content'); ?>




<div class="card">
    <div class="card-body">

        <h4 class="mt-0 header-title">List Pages for your WebSite</h4>

        <div class="table-responsive">
            <table class="table table-striped mb-0">
                <tbody>       
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border-0">
                            <a href="<?php echo e(route('aprops',['page' => $page->slug])); ?>">
                                <i class="fab fa-internet-explorer"></i>
                                <?php echo e(URL::to('/')); ?>/<?php echo e($page->slug); ?>

                            </a>
                        </td>
                        <td class="border-0 text-center">
                            <small class="badge badge-pill badge-dark"><?php echo e(Carbon\Carbon::parse($page->created_at)->toFormattedDateString()); ?>

                            </small></td>
                        <td class="float-right border-0">                                                       
                            <a href="<?php echo e(route('admin.pages.show', ['page' => $page->slug])); ?>"  class="btn btn-sm btn-info d-inline-block"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo e(route('admin.pages.edit', ['page' => $page->id])); ?>"  class="btn btn-sm btn-warning d-inline-block"><i class="far fa-edit"></i></a>
                            <form action="<?php echo e(route('admin.pages.destroy', ['page' => $page->id])); ?>" method="post" class="d-inline-block">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table><!--end /table-->
        </div><!--end /tableresponsive-->
    </div><!--end card-body-->
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\pages\list-pages.blade.php ENDPATH**/ ?>