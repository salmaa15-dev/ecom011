<div class="left-sidenav">                 

    <ul class="metismenu left-sidenav-menu" id="side-nav">

        <li class="menu-title">{{ $title }}</li>

        <li>

            <a href="{{ route('admin.dashboard') }}"><i class="mdi mdi-monitor"></i><span>Tableaux de bord</span></a>

        </li>

        <li>

            <a href="javascript: void(0);"><i class="mdi mdi-message"></i><span>Notifications</span>

                @if (Auth::user()->notifications->count())

                <span class="menu-arrow"><i class="fas fa-bell float-right text-success"></i></span>

                @endif

            </a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.new_notifications') }}"><span>New notification</span><span class="badge badge-danger float-right">{{Auth::user()->notifications->count()}}</span></a></li>

                <li><a href="{{ route('admin.contacts') }}"><span>Histoire messages</span></a></li> 

            </ul>

        </li>

        <li>

            <a href="javascript: void(0);"><i class="fab fa-product-hunt"></i><span>Produit</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.products.index') }}"><span>List Produits</span></a></li>
                <li><a href="{{ route('admin.products.products_removed') }}"><span>List Produits removed</span></a></li>
                <li><a href="{{ route('admin.products.create') }}"><span>Creation Produit</span></a></li> 

            </ul>

        </li>

        <li>

            <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Offre</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.packs.index') }}"><span>List Offre</span></a></li>

                <li><a href="{{ route('admin.packs.create') }}"><span>Creation Offre</span></a></li> 

            </ul>

        </li>



        <li>

            <a href="javascript:void(0);"><i class="fas fa-copyright"></i><span>Categorie</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.categorys.index') }}">List categorie</a></li>

                <li><a href="{{ route('admin.categorys.create') }}">Creation categorie</a></li>

            </ul>

        </li>



        <li>

            <a href="javascript: void(0);"><i class="fas fa-map-marker-alt"></i><span>Ville</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.countries.index') }}">List Villes</a></li>

                <li><a href="{{ route('admin.countries.create') }}"></a>Creation Ville</li>

            </ul>

        </li>



        <li>

            <a href="javascript: void(0);"><i class="fas fa-user"></i><span>Customers</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.customers') }}">List Customers</a></li>

            </ul>

        </li>



        <li>

            <a href="javascript: void(0);"><i class="fab fa-product-hunt"></i><span>Page</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.pages.index') }}"><span>List Pages</span></a></li>

                <li><a href="{{ route('admin.pages.create') }}"><span>Creation Page</span></a></li> 

            </ul>

        </li>

        <li class="menu-title">settings</li>



        <li>

            <a href="javascript:void(0);"><i class="fas fa-wrench"></i><span>Settings</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

            <ul class="nav-second-level" aria-expanded="false">

                <li><a href="{{ route('admin.settings.index') }}"><i class="far fa-newspaper"></i><span>Settings site</span></a></li>

                <li>

                    <a href="javascript:void(0);"><i class="fas fa-user-shield"></i><span>Settings for users</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>

                    <ul class="nav-second-level" aria-expanded="false">

                        <li><a href="{{ route('admin.change.password') }}">Change password</a></li>

                        <li><a href="{{ route('admin.change.informations') }}">Change informations</a></li>

                        <li><a href="{{ route('admin.register') }}">Creation users</a></li>

                    </ul>

                </li>

            </ul>

        </li>

    </ul>

</div>