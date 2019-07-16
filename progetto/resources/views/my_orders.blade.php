
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

<!-- ##### Right Side Cart End ##### -->
<div class="cart-bg-overlay"></div>

<div class="right-side-cart-area">
@include ('cart', ['carts' => $carts])
<!-- ##### Right Side Cart End ##### -->
</div>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(/img/bg-img/breadcumb.jpg">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>MY ORDERS </h2>
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
                        <h6 class="widget-title mb-30">My Account</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul>
                                <li > <a id="myorders" href="{{route('orders.index')}}" > My Orders</a></li>
                                <li><a href="{{route('users.edit')}}"> My Data</a></li>
                                <li><a href="/data">  My Adresses</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div id="d" class="col-12 col-md-8 col-lg-9">
               <?php
               $orders= DB::table('order')
                   ->join('payment','payment.id','=','order.payment_id')
                    ->select('order.id','payment.total_price', 'order.status_order_id')
                    ->where('order.user_id','=', Auth::user()->id)
                    ->get();
               $flag=false;
                     foreach($orders as $order){
                         $flag=true;
                         $ods[$order->id]= DB::table('order_composition')
                             ->join('product','product.id','=','order_composition.product_id')
                             ->join('order','order.id', '=', 'order_composition.order_id')
                             ->join('category','category.id', '=', 'product.category_id')
                             ->join('gallery','product.id','=','gallery.product_id')

                             ->select('product.name', 'gallery.path' , 'product.id', 'product.price','product.brand'
                                )
                             ->where('order_id','=',$order->id)
                             ->get();
                     }
                          ?>

                  @if( !$flag)
                       <div class="card" style="display:inline-block; width: 400px;">

                           <div class="card-header  bg-secondary text-white"> Order#</div>
                           <div class="card-body">

                               <p style="color: black; line-height:7px;"> No orders yet!</p>

                           </div>
                       </div >
                   @else

                       <div style="float: left;">
                           @foreach($orders as $order)
                       <div class="card" style="display:inline-block; width: 400px;">

                       <div class="card-header  bg-secondary text-white"> Order# {{$order->id}}</div>
                       <div class="card-body">
                           total price: {{$order->total_price}} <br>
                         Delivery Status : @if($order->status_order_id==1)
                                   Delivered
                               @else Not Delivered
                               @endif
                           <hr>
                       @foreach($ods[$order->id] as $od)
                               <table  >
                                   <tr><td>Product:</td><td> </td> </td></td></tr>
                                   <tr >
                                       <td rowspan="3"> <img  style="height: 100px;" src="{{asset('img/product-img/'.$od->path.'.jpg')}}"> </td>
                                       <td style="padding:0 15px 0 15px;">
                           Name:  {{$od->name}} <br>
                           Brand:    {{$od->brand}}<br>
                           Price:    {{$od->price}}
                                       </td>
                                       <td>

                                   </tr>
                             </table>
                                  <hr>

                              @endforeach
                       </div>
                   </div ><br><br>
                           @endforeach
</div>

                   @endif



            </div>

            <!-- Pagination -->
            <nav aria-label="navigation">

            </nav>

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
<!-- Active js -->
<script src={{asset('js/active.js')}}></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    // $(document).ready(function() {
    // var url = $("#All").getAttribute("href");
    //  $('#myorders').click(function(){
    //   $.get("#d", function( data ) {
    //         $( ".destinazione" ).html( data );
    // });
    //  });
    //  });
    // $(document).ready(function(){
    // $("#myorders").click(function(){
    //   $("d").hide();
    //   });
    // });


</script>
</body>

</html>
