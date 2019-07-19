<header class="header_area">
    <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
        <!-- Classy Menu -->
        <nav class="classy-navbar" id="essenceNav">
            <!-- Logo -->
            <a class="nav-brand" href="/"><img src={{asset('img/core-img/logo.png')}} alt=""></a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
                <!-- close btn -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>
                <!-- Nav Start -->
                <div class="classynav">
                    <ul>

                        <li><a href="/shop/Woman">Woman</a></li>



                        <li><a href="/shop/Man">Man</a></li>



                        <li><a href="/shop/Accessories">Accessories</a></li>



                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Nav End -->
            </div>
        </nav>


        <!-- Header Meta Data -->
        <div class="header-meta d-flex clearfix justify-content-end">
            <!-- Search Area -->
            <div class="search-area">
                <form action="{{route('search')}}" method="GET">
                    <input type="text" name="query" id="query" value ="{{request()->input('query')}}" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="/wishlist"><img src={{asset('img/core-img/heart.svg')}} alt=""></a>
            </div>
            <!-- User Login Info -->

            @guest
                   <div class="user-login-info">
                <a href="/login"><img src={{asset('img/core-img/user.svg')}}> {{ __('Login') }}</a>
                </li> </a>
                   </div>
                 @else
                <div class="user-login-info">

                           <a id="navbarDropdown"  href="/Profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                               <img src={{asset('img/core-img/user.svg')}}> {{ Auth::user()->name }}</a>
                               <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                   <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>
                                   <a href="/Profile"
                                      >
                                       My Profile
                                   </a>
                               </div>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                           
                </div>
                           @endguest




            <!--user sign i n -->


            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src={{asset('img/core-img/bag.svg')}} alt=""> <span></span></a>
            </div>
        </div>

    </div>
</header>

