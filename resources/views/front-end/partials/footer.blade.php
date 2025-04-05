<div class="pa-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">Meilleurs Produits</h2>
                    <ul>
                        @foreach ($categorysByPro as $item)
                            <li>
                            <a href="{{ route('productByCategory', ['productBycategory' => $item->slug]) }}">{{ $item->name }}</a>
                        </li>
                        @endforeach  
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">réseaux sociaux</h2>
                    <ul>
                        <li>
                            <a href="{{ $facebook }}"><i class="fab fa-facebook-f"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="{{ $instagram }}"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone={{ $phone }}"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                        </li>
                        <li>
                            <a href="mailto:{{ $email }}"><i class="far fa-envelope"></i> {{ $email }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="pa-foot-box">
                    <h2 class="pa-foot-title">À propos</h2>
                    <ul>
                       @foreach ($pages as $page)
                        <li>
                            <a href="{{ route('aprops',['page' => $page->slug]) }}">{{ $page->slug }}</a>
                        </li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="pa-foot-box pa-foot-subscribe">
                <img src="{{ $logo }}" data-original="{{ $logo_footer }}" width="110px" alt="image" class="lazy img-fluid"/>
                <p>{{ $description }}</p>
            </div>
        </div>
    </div>
</div>