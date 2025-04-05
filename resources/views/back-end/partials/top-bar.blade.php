<div class="page-wrapper-img">

    <div class="page-wrapper-img-inner">

        <div class="sidebar-user media">

            <div class="media-body">

                <h5 class="text-light">{{ Auth::user()->name }} </h5>

                <ul class="list-unstyled list-inline mb-0 mt-2">

                    <li class="list-inline-item">

                        <a href="{{ route('admin.change.informations') }}" class=""><i class="mdi mdi-account text-light"></i></a>

                    </li>

                    <li class="list-inline-item">

                        <a href="{{ route('admin.settings.index') }}" class=""><i class="mdi mdi-settings text-light"></i></a>

                    </li>

                    <li class="list-inline-item">

                        <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-power text-danger"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                            @csrf

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

                        <a href="{{ route('admin.products.create') }}" class="btn btn-info px-4 align-self-center report-btn"><i class="fas fa-plus"></i> C-N-P</a>

                    </div>

                    <h4 class="page-title mb-2"><i class="mdi mdi-google-pages mr-2"></i>

                       {{ str_replace(['admin', '/', '-', 'edit'], ['', ' - ', ' ', ''], request()->path()) }}

                    </h4>                                     

                </div><!--end page title box-->

            </div><!--end col-->

        </div>

        <!--end row-->

        <!-- end page title end breadcrumb -->

    </div><!--end page-wrapper-img-inner-->

</div>