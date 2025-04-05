<div class="pa-bill-detail">
    <p class="pa-bill-title">Détails de la commande</p>
    <table>
        <tbody class="center-td">
            <tr class="pa-checkout-total">
                <td>montant total</td>
                <td colspan="2"  class="text-center">
                    <div wire:loading wire:target="remove">
                        @include('loader.loader-cart')
                    </div>
                     {{ $total }} <strong>{{ $currency }}</strong>
                </td>
            </tr>
        </tbody> 
    </table>
</div>
