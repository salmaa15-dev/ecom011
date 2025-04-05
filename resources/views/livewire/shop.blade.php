<div wire:click="shop" class="pa-blog-view text-center">

    <a href="javascript: void(0);"  class="mr-4">Ajouter au panier <i class="fas fa-shopping-cart"></i></a>     

    <div wire:loading wire:target="shop" style="margin-left: 5px">

        @include('loader.loader-cart')

     </div>  

</div>