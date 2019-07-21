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
    @include ('cart', ['carts' => $carts])

</div>
<!-- ##### Right Side Cart End ##### -->

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(/img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Shop</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->


<section class="shop_grid_area section-padding-80">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->


                        <h6 class="widget-title mb-30">Categories</h6>



                        <!--  Catagories  -->

                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">

                                <!-- Single Item -->




                                    <li data-toggle="collapse" data-target="#Woman" class="collapsed">
                                        <a href="#">Woman</a>
                                        <ul class="sub-menu collapse" id="Woman">
                                            <li value="/shop/Woman/Dresses"><a href="#">Dresses</a></li>
                                            <li value="/shop/Woman/T-Shirt"><a href="#">T-Shirts</a></li>
                                            <li value="/shop/Woman/Jeans"><a href="#">Jeans</a></li>
                                            <li value="/shop/Woman/Skirts"><a href="#">Skirts</a></li>
                                            <li value="/shop/Woman/Sweaters"><a href="#">Sweaters</a></li>
                                        </ul>
                                    </li>



                            <!-- Single Item -->

                                    <li data-toggle="collapse" data-target="#Man" class="collapsed">
                                        <a href="#">Man</a>
                                        <ul class="sub-menu collapse" id="Man">
                                            <li value="/shop/Man/Trousers"><a href="#">Trousers</a></li>
                                            <li value="/shop/Man/Jeans"><a href="#">Jeans</a></li>
                                            <li value="/shop/Man/T-Shirt"><a href="#">T-Shirts</a></li>
                                            <li value="/shop/Man/Shirts"><a href="#">Shirts</a></li>
                                            <li value="/shop/Man/Sweaters"><a href="#">Sweaters</a></li>
                                        </ul>
                                    </li>


                            <!-- Single Item -->

                                    <li data-toggle="collapse" data-target="#Accessories" class="collapsed">
                                        <a href="#">Accessories</a>
                                        <ul class="sub-menu collapse" id="Accessories">
                                            <li value="/shop/Accessories/Woman Bags"><a href="#">Bags</a></li>
                                            <li value="/shop/Accessories/Cap"><a href="#">Caps</a></li>
                                            <li value="/shop/Accessories/Man Scarf"><a href="#">Scarfs</a></li>
                                            <li value="/shop/Accessories/Bow Tie"><a href="#">Bowties</a></li>
                                            <li value="/shop/Accessories/Sunglasses"><a href="#">Sunglasses</a></li>
                                            <li value="/shop/Accessories/Woman Belt"><a href="#">Belts</a></li>
                                            <li value="/shop/Accessories/Woman Wallet"><a href="#">Wallets</a></li>
                                        </ul>
                                    </li>

                            </ul>
                        </div>

                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Filter by</h6>
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Price</p>
                        <div class="range-price">
                            <ul>
                                <li value="/shopping/price1"> <a href="#" > 0 - 20€</a></li>
                                <li><a href="#"> 20 - 50€</a></li>
                                <li><a href="#"> 50 - 100€</a></li>
                                <li><a href="#"> > 100€</a></li>
                            </ul>
                        </div>
                    </div>




                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Brands</p>
                        <div class="widget-desc">
                            <ul>
                                <li><a href="#">Levi's</a></li>
                                <li><a href="#">Mango</a></li>
                                <li><a href="#">Bershka</a></li>
                                <li><a href="#">Napapijri</a></li>
                                <li><a href="#">Nike</a></li>
                                <li><a href="#">Adidas</a></li>
                            </ul>
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

                    <div class="row destinazione" id="html">

                        @include('productInclude', $products)


                    </div>
                </div>
                <!-- Pagination -->

            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->

<!-- ##### Footer Area Start ##### -->
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
<script src={{asset('js/shopcart.js')}}></script>


</body>

</html>
