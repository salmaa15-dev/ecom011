<div class="pa-prod-count">
    <div class="pa-cart-quantity">
        <button class="pa-sub" wire:click="sub"></button>
        <input type="number" wire:model="qty" id="quantity" min="1">
        <button class="pa-add" wire:click="plus"></button>
    </div>
    <div wire:loading wire:target="add" style="margin-right: 5px">
        @include('loader.loader-cart')
     </div>
    <button class="pa-btn" wire:click="add">
        Ajouter au panier
    </button>
   
</div>