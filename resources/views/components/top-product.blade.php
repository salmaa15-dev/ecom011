<div class="pa-product-sidebar mb-3">
    <div class="pa-widget pa-product-widget">
        <h2 class="pa-sidebar-title">Meilleurs Produits</h2>
        <ul>
           @foreach ($dbdata ?? [] as $item)
                @foreach ($item->products as $product)
                    <li onclick="location.href='{{ route('details', ['slug' => $product->slug]) }}'">
                        <div class="pa-pro-wid-img">
                            <img src="{{ $logo }}" 
                                data-original="{{ $product->logo_urls }}" 
                                alt="{{ $product->title }}" 
                                class="lazy image-fluid"/>
                        </div>
                        <div class="pa-pro-wid-content">
                            <h4><a href="javascript::;">{{ $item->name }}</a></h4>
                            <a href="javascript::;">{{ $product->description_limit }}</a>
                        </div>
                    </li>
                @endforeach
           @endforeach
        </ul>
    </div> 
    <div class="pa-widget pa-shop-category">
        <h2 class="pa-sidebar-title">Categories</h2>
        <ul>
            @foreach ($categorysByPro as $categorie)
                <li onclick="location.href='{{ route('productByCategory', ['productBycategory' => $categorie->slug]) }}'">
                    <a href="javascript::;"> 
                        {{ $categorie->name }} 
                        <span>{{ $categorie->products_count }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>        
</div>