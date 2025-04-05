<a href="{{ route('cart') }}">
    @include('front-end.partials.cart-logo')
    @if ($this->qty)
        <span>{{ $this->qty }}</span>
    @endif
</a>