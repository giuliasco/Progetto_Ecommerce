<!-- Single Cart Item -->
@foreach($carts as $cart)

    <div class="single-cart-item">
        <a href="#" class="product-image">
            <img src={{asset('img/product-img/'.$cart->path.'.jpg')}} class="cart-thumb" alt="">
            <!-- Cart Item Desc -->
            <div class="cart-item-desc">
                <span id="{{$cart->id}}" class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                <span class="badge">{{$cart->brand}}</span>
                <h6>{{$cart->name}}</h6>
                <p class="size">Size: {{$cart->size}}</p>
                <p class="price">{{$cart->price}}€</p>
            </div>
        </a>
    </div>

@endforeach

