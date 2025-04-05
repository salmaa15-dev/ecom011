<div class="page-wrapper-img">

    <div class="page-wrapper-img-inner">

        <div class="sidebar-user media">

            <div class="media-body">

                <h5 class="text-light"><?php echo e(Auth::user()->name); ?> </h5>

                <ul class="list-unstyled list-inline mb-0 mt-2">

                    <li class="list-inline-item">

                        <a href="<?php echo e(route('admin.change.informations')); ?>" class=""><i class="mdi mdi-account text-light"></i></a>

                    </li>

                    <li class="list-inline-item">

                        <a href="<?php echo e(route('admin.settings.index')); ?>" class=""><i class="mdi mdi-settings text-light"></i></a>

                    </li>

                    <li class="list-inline-item">

                        <a  href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-power text-danger"></i>
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">

                            <?php echo csrf_field(); ?>

                        </form>

                    </li>

                </ul>

            </div>                    

        </div>

        <!-- Page-Title -->

        <div class="row">

            <div class="col-sm-12">

                <div class="page-title-box">

                    <div class="float-right align-item-center mt-2">

                        <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-info px-4 align-self-center report-btn"><i class="fas fa-plus"></i> C-N-P</a>

                    </div>

                    <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>

                       <?php echo e(str_replace(['admin', '/', '-', 'edit'], ['', ' - ', ' ', ''], request()->path())); ?>


                    </h4>                                     

                </div><!--end page title box-->

            </div><!--end col-->

        </div>

        <!--end row-->

        <!-- end page title end breadcrumb -->

    </div><!--end page-wrapper-img-inner-->

</div><?php /**PATH C:\xampp\htdocs\ecommerce\resources\views/back-end/partials/top-bar.blade.php ENDPATH**/ ?>