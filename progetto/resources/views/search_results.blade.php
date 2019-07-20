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

<div class="right-side-cart-area">
@include ('cart', ['carts' => $carts])
<!-- ##### Right Side Cart End ##### -->
</div>
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style=background-image:url('{{asset('img/bg-img/breadcumb.jpg')}}');">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2 align="center">Search Results</h2>
                  <p>      @if($products->count()==0)
                        <P> No Results </P>
                      @else{{$products->count()}} results for {{request()->input('query')}}<br></p>
                               @endif

                </div>
            </div>
        </div>
    </div>
</div>


<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row"> <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->


                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->

                                <!-- Single Item -->

                                <!-- Single Item -->

                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">

                        <!-- Widget Title 2 -->

                        <div class="range-price">

                        </div>
                    </div>




                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->

                        <div class="widget-desc">

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-12 col-lg-12">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">


                                </div>

                                </div>
                                <!-- Sorting -->

                            </div>
                        </div>
                    </div>

                @if($products->count()==0)


                    @else

                    <div class="row destinazione">
                        @include('productInclude', $products)


                    </div>
                </div>
                <!-- Pagination -->
            {{ $products->links() }}
            </div>
        @endif
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

<script>

    $(document).ready(function() {
        // var url = $("#All").getAttribute("href");
        $('#All').click(function(){
            $.get("/shop/Woman/All", function( data ) {
                $( ".destinazione" ).html( data );
            });
        });
    });


</script>

</body>

</html>
