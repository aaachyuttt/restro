<div>
    <div class="th-cart-wrapper  section-padding fix bg-white">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Menu Image</th>
                            <th class="cart-colname">Menu Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($cart_items as $item)
                            <tr wire:key='{{ $item['product_id'] }}' class="cart_item">
                                <td data-title="Product">
                                    <a class="cartimage" href="#"><img width="91" height="91"
                                            src="{{ url('storage', $item['image']) }}" alt="Image"></a>
                                </td>
                                <td data-title="Name">
                                    <a class="cartname" href="#">{{ $item['name'] }}</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>$</span>{{ $item['price'] }}</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button wire:click='decreaseQty({{ $item['product_id'] }})'
                                            class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                        <input type="number" class="qty-input" value="{{ $item['quantity'] }}"
                                            min="1" max="99">
                                        <button wire:click='increaseQty({{ $item['product_id'] }})'
                                            class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>$</span>{{ $item['total_amount'] }}</bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a wire:click='removeItem({{ $item['product_id'] }})' href="#"
                                        class="remove"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @empty
                            <tr class="cart_item"> No items available in cart</tr>
                        @endforelse
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td data-title="Cart Subtotal">
                                    <span class="amount"><bdi><span>$</span>{{ $grand_total }}</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li>
                                            <input type="radio" id="free_shipping" name="shipping_method"
                                                class="shipping_method">
                                            <label for="free_shipping">Free shipping</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="flat_rate" name="shipping_method"
                                                class="shipping_method" checked="checked">
                                            <label for="flat_rate">Flat rate</label>
                                        </li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">
                                        Shipping options will be updated during checkout.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Order Total</td>
                                <td data-title="Total">
                                    <strong><span class="amount"><bdi><span>$</span>47</bdi></span></strong>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mt-3">
                        @if ($cart_items)
                            <a href="{{ route('menu') }}" class="theme-btn btn-fw">Continue Shopping</a>
                            <a href="{{ route('checkout') }}" class="theme-btn btn-fw">Proceed to checkout</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
