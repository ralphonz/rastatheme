<div class="cart">
  <div class="btn btn-green cart-quantity">
    {{ _e('Ya got', 'rastatheme') }}
    @if (WC()->cart->get_cart_contents_count() == 0)
      {{ _e('noting', 'rastatheme') }}
    @elseif (WC()->cart->get_cart_contents_count() == 1)
      {{ _e('1 ting')}}
    @else
      {{ WC()->cart->get_cart_contents_count() }}&nbsp;{{ _e('tings') }}
    @endif
    {{ _e('in ya cart', 'rastatheme') }}
  </div>
  <div class="btn btn-gold cart-total">
    {{ _e('Cart Total', 'rastatheme') }}&nbsp;{!! WC()->cart->get_cart_subtotal() !!}
  </div>
  <a class="btn btn-red view-cart" href="{{ wc_get_cart_url() }}">{{ _e('View Cart', 'rastatheme') }}</a>
</div>
