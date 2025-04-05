<div class="pa-blog">
    <div class="container">
        @forelse($categories as $key => $category)
                <hr data-content="{{ $category->name }}" class="hr-text">
                <div class="row ">
                    @foreach($category->products->take(2) as $key1 => $product)
                        <div id="te" class="col-lg-4 column mx-auto">
                            <div class="pa-blog-box">
                                <a href="{{ route('details', ['slug' => $product->slug]) }}">
                                    <img 
                                        src="{{ $product->LogoUrls }}"
                                        class="image-fluid"/>
                                </a>
                            
                               <div class="pa-blog-title">
                                   <span class="text-danger float-right">{!! $product->percent !!}</span>
                                   <strong><a href="{{ route('details', ['slug' => $product->slug]) }}">{{ $product->title }}</a></strong>
                                   <br>
                                   @if ($product->etat_sale && $product->sale > 0)
                                       <strong>{{ int_to_decimal($product->sale) }} {{ $currency }}</strong>
                                       &nbsp;
                                       <del class="text-danger strong">{{ int_to_decimal($product->price) }} {{ $currency }}</del>
                                   @else
                                       <strong>{{ int_to_decimal($product->price) }} {{ $currency }}</strong>
                                   @endif
                                   <br>
                                   <strong class="float-right">{{ $product->view }} <i class="fas fa-eye text-info"></i> views</strong>
                               </div>
                                <livewire:shop
                                   :key="$product->id.$product->slug" 
                                   :product-id="$product->id"/>
                            </div>
                        </div>
                    @endforeach
                    @if($category->products_count > 2)
                        <div class="col-lg-12 text-center">
                            <a href="{{ route('productByCategory', ['productBycategory' => $category->slug]) }}">View More <i class="fas fa-arrow-circle-right text-warning"></i></a>
                        </div>
                    @endif
                </div>
            @empty
              <div class="col-md-12 text-center">
                  <a herf="#" class="f-25">There's no products yet</a>
              </div>
            
        @endforelse
    </div>
    @if ($categories->count() != $cat_count) 
       <div id="load-more" class="container">
        <div class="row" >
            <div class="col-lg-4 column mx-auto">
                <div class="pa-blog-box">

                    <div class="card">
                        <div class="header">
                          <div class="img"></div>
                        </div>
                        <div class="description">
                          <div class="line line-1"></div>
                          <div class="line line-2"></div>
                          <div class="line line-3"></div>
                        </div>
                        <div class="btns">
                          <div class="btn btn-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 column mx-auto">
                <div class="pa-blog-box">
                    
                    <div class="card">
                        <div class="header">
                        <div class="img"></div>
                        </div>
                        <div class="description">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        </div>
                        <div class="btns">
                        <div class="btn btn-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
     @endif

<script type="text/javascript">
window.addEventListener('load',function(){var x=document.getElementById('load-more');function loadEvent(){x.style.display=x.style.display=="block"?"none":"block"}setInterval(loadEvent,2500);var observer=new IntersectionObserver(function(entries){if(entries[0].isIntersecting===true)try{window.livewire.emit('load-more')}catch(error){console.log('..')}},{threshold:[1]});observer.observe(document.querySelector("#load-more"))})       
</script>
</div>
