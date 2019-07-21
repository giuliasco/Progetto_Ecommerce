<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{asset('css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
<!-- ##### Header Area Start ##### -->
@include('header')
<!-- ##### Header Area End ##### -->

<!-- ##### Right Side Cart Area ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">
    @include ('cart', [$carts, $cartsubtotal])

</div>
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(/img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>WishList</h2>
                </div>
            </div>
        </div>
    </div>
</div>

@if(!(empty($products)))

    @foreach($products as $product)
<!-- Single Product -->

<div class="col-12 col-sm-6 col-lg-4">
    <div class="single-product-wrapper">
        <!-- Product Image -->
        <div class="product-img">
            <a href='/shop/single-product-details/{{$product->id}}'>
                <img src="{{asset('storage/img/'.$product->path.'.jpg')}}" alt="">
            </a>
            <!-- Hover Thumb -->
            <!--   <img class="hover-img" src="img/product-img/product-1.jpg" alt="">-->
            <!-- Favourite -->

        </div>

        <!-- Product Description -->
        <div class="product-description">
            <span>{{$product->brand}}</span>
            <a href='/shop/single-product-details/{{$product->id}}'>
                <h6>{{$product->name}}</h6>
            </a>
            <p class="product-price">{{$product->price}}€</p>

            <!-- Hover Content -->
            <div class="hover-content">
            <!-- Add to Cart
                    <div class="add-to-cart-btn">
                        <a id='addcart' value="{{$product->id}}" href="#" class="btn essence-btn">Add to Cart</a>
                    </div> -->
            </div>
        </div>
    </div>
</div>

<div class="col-12 col-md-8 col-lg-9">
    <div class="shop_grid_product_area">
        <div class="row">
            <div class="col-12">
                <div class="product-topbar d-flex align-items-center justify-content-between">
                    <!-- Total Products -->
                    <div class="total-products">

                    </div>

                </div>
            </div>
        </div>

        @endforeach

@else
    <section>

            <div class="section-heading text-center">

            <h2> Non hai inserito nessun prodotto </h2>
        </div>

    </section>

                @endif
    </div>
</div>

@include('footer')

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src={{asset('js/jquery/jquery-2.2.4.min.js')}}></script>
<!-- Popper js -->
<script src={{asset('js/popper.min.js')}}></script>
<!-- Bootstrap js -->
<script src={{asset('js/bootstrap.min.js')}}></script>
<!-- Plugins js -->
<script src={{asset('js/plugins.js')}}></script>
<!-- Classy Nav js -->
<script src={{asset('js/classy-nav.min.js')}}></script>
<!-- Active js -->
<script src={{asset('js/active.js')}}></script>

<script src={{asset('js/CategoryFilter.js')}}></script>
<script src={{asset('js/cart.js')}}></script>



</body>
</html>