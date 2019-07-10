

    <!-- Cart Button -->
    <div class="cart-button">
        <a href="#" id="rightSideCart"><img src={{asset('img/core-img/bag.svg')}} alt=""> <span>3</span></a>
    </div>



    <div class="cart-content d-flex">

        <!-- Cart List Area -->
        <div class="cart-list">
        @include ('cartprod', ['carts' => $carts])
        </div>




        <!-- Cart Summary -->
        <div class="cart-amount-summary">

            <h2>Summary</h2>
            <ul class="summary-table">
                <li><span>subtotal:</span> <span>$274.00</span></li>
                <li><span>delivery:</span> <span>Free</span></li>
                <li><span>discount:</span> <span>-15%</span></li>
                <li><span>total:</span> <span>$232.00</span></li>
            </ul>
            <div class="checkout-btn mt-100">
                <a href="/checkout" class="btn essence-btn">check out</a>
            </div>
        </div>
    </div>
</div>
