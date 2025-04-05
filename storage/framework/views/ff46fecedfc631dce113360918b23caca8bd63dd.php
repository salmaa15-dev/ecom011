<?php $__env->startSection('content'); ?>
<div id="project-list-left" class="pb-1">
    <?php echo $__env->make('success.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('customers', [])->html();
} elseif ($_instance->childHasBeenRendered('zcN8mCp')) {
    $componentId = $_instance->getRenderedChildComponentId('zcN8mCp');
    $componentTag = $_instance->getRenderedChildComponentTagName('zcN8mCp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zcN8mCp');
} else {
    $response = \Livewire\Livewire::mount('customers', []);
    $html = $response->html();
    $_instance->logRenderedChild('zcN8mCp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.back-end', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\customers\list-customers.blade.php ENDPATH**/ ?>