
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
                    <h2>MY DATA </h2>
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
                                <li><a href="#"> My Data</a></li>
                                <li><a href="#">  My Adresses</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="destinazione">

            </div>

            <div id="d" class="col-12 col-md-8 col-lg-9">



                <form method="POST" action="{{ route('users.update') }}">
                 @method("patch")
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-right">Edit Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control " name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control " name="email" value="{{ old('email' , $user->email)}}" required autocomplete="email">


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">Edit Phone Number</label>

                        <div class="col-md-6">
                            <input id="phone" class="form-control" type="text" name="phone"  placeholder="phone"  value="{{ old('phone' , $user->phone)}}"  autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Edit Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control " name="password"  placeholder="password"  autocomplete="new-password">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="confirm password"  autocomplete="new-password">
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <p> to modify data click the button below</p>
                            <button type="submit" class="btn btn-primary">
                              Update Data
                            </button>
                        </div>
                    </div>
                </form>



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
