<?php if(session()->has('success')): ?>

<div class="alert alert-success alert-dismissible fade show text-center" role="alert">

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

        <span aria-hidden="true"><i class="mdi mdi-close"></i></span>

    </button>

    <?php echo session('success'); ?>


</div>

<?php endif; ?><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/success/success.blade.php ENDPATH**/ ?>