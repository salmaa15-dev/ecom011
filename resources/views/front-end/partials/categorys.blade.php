<div class="pa-product-sidebar">

    <div class="pa-widget pa-shop-category mt-4">

        <h2 class="pa-sidebar-title">Categories</h2>

        <ul>

            @foreach ($categorysByPro as $category)

                <li>
                    <a href="{{ route('productByCategory', ['productBycategory' => $category->slug]) }}">
                        <img src="{{ $logo}}" data-original="{{ $category->logo_urls }}" class="lazy image-fluid-categories">
                        {{ $category->name }} 
                        <span>{{ $category->products->count() }}</span>
                        <hr>
                    </a>
                </li>

            @endforeach

            @if($categorysByPro->count() >= 10)

                <div class="col-md-12 text-center mt-3">

                    <a href="{{ route('brands') }}">Voir plus de categories <i class="fas fa-arrow-circle-right text-warning"></i></a>

                </div>

            @endif

        </ul>

    </div>                    

</div>