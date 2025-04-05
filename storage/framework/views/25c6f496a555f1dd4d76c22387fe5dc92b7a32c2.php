<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
    </button>
    <strong>Oh snap!</strong> <?php echo session('error'); ?>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\errors\error.blade.php ENDPATH**/ ?>