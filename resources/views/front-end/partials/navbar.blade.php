<div class="pa-main-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-6">
                <div class="pa-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ $logo }}" data-original="{{ $logo_nav_bar }}" width="129px" alt="image" class="lazy img-fluid"/>
                    </a>
                </div>
            </div>
            <div class="col-md-9 col-6">
                <div class="pa-nav-bar">
                    <div class="pa-menu">
                        <ul>
                            <li class="pa-menu-child"><a href="/">Accueil</a></li>
                            <li>
                                <a href="{{ route('packs') }}">Offres</a>
                            </li>
                            <li class="pa-menu-child"><a href="Javascript:;">À propos</a>
                                <ul class="pa-submenu">
                                    @foreach ($pages as $page)
                                        <li>
                                            <a href="{{ route('aprops',['page' => $page->slug]) }}">{{ $page->slug }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="pa-menu-child"><a href="Javascript:;">Shop</a>
                                <ul class="pa-submenu">
                                    @foreach ($categorysByPro as $category)
                                        <li>
                                            <a href="{{ route('productByCategory', ['productBycategory' => $category->slug]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('sales') }}">
                                    Solde
                                </a>
                            </li>
                            <li><a href="{{ route('brands') }}">Categories</a></li>
                            <li><a href="{{ route('contact') }}">Contactez-nous</a></li>
                            <li><a href="{{ route('login') }}">Log In</a></li>
                        </ul>
                    </div>
                    <div class="pa-head-icon">
                        <ul>
                            <li>
                                <livewire:cart-button />
                            </li>
                        </ul>
                        <div class="pa-toggle-nav">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>