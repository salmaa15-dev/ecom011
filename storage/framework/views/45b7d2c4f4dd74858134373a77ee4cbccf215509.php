<nav class="navbar-custom">

    <!-- LOGO -->

    <div class="topbar-left">

        <a href="#" class="logo">

            <span>

                <img src="<?php echo e($logo); ?>" width="50px" alt="argan-cosmetic" class="logo-lg"/>

            </span>

        </a>

    </div>



    <ul class="list-unstyled topbar-nav float-right mb-0">

        

        <li class="dropdown">

             <?php if (isset($component)) { $__componentOriginal190106651f25b83d22b6ff49ba13bdbd5ee4f2e3 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\NotificationComponent::class, []); ?>
<?php $component->withName('notification-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal190106651f25b83d22b6ff49ba13bdbd5ee4f2e3)): ?>
<?php $component = $__componentOriginal190106651f25b83d22b6ff49ba13bdbd5ee4f2e3; ?>
<?php unset($__componentOriginal190106651f25b83d22b6ff49ba13bdbd5ee4f2e3); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

        </li>

        <li class="dropdown">

            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"

                aria-haspopup="false" aria-expanded="false">

                <?php echo e(auth()->user()->name); ?>


                <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>

            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <a class="dropdown-item" href="<?php echo e(route('admin.change.informations')); ?>"><i class="dripicons-user text-muted mr-2"></i> Profile</a>

                <a class="dropdown-item" href="<?php echo e(route('home')); ?>"><i class="dripicons-wallet text-muted mr-2"></i>Shop</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"

                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <i class="dripicons-exit text-muted mr-2"></i> Logout</a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>

            </div>

        </li>

    </ul>

    <ul class="list-unstyled topbar-nav mb-0">            
        <li>
            <button class="button-menu-mobile nav-link waves-effect waves-light">
                <i class="mdi mdi-menu nav-icon"></i>
            </button>
        </li>
    </ul>
</nav><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/partials/navbar.blade.php ENDPATH**/ ?>