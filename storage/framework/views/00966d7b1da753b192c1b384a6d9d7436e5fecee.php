<!DOCTYPE html>
<html lang="en"lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A premium admin dashboard template by mannatthemes" name="description" />
    <meta content="Mannatthemes" name="author" />
     <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e($logo); ?>" type="image/x-icon">
    <link href="<?php echo e(asset('back-end/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('back-end/assets/css/icons.css')); ?>" rel="stylesheet" type="text/css" />

    <style>
        .footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            margin-bottom: 10px
        }
    </style>
</head>
<body>
    
    <div class="container text-center">
        <?php echo $page->content; ?>

    </div>

   <div class="footer text-center">
        <a href="<?php echo e(route('admin.pages.index')); ?>" class="btn btn-primary btn-sm report-btn"><i aria-hidden="true" class="fas fa-fast-backward"></i> &nbsp; Back to Pages</a>
        <a href="<?php echo e(route('admin.pages.edit', ['page' => $page->id])); ?>" class="btn btn-sm btn-warning text-white">Change Page <i class="far fa-edit"></i></a>
   </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\aziz-ecom\resources\views\back-end\pages\show-page.blade.php ENDPATH**/ ?>