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
                        {{--<ul class="dropdown">
                            <li><a href="/shop">Dresses</a></li>
                            <li><a href="/shop">Blouses &amp; Shirts</a></li>
                            <li><a href="/shop">T-shirts</a></li>
                            <li><a href="/shop">Rompers</a></li>
                            <li><a href="/shop">Bras &amp; Panties</a></li>
                            foreach($categories as $category)
                           <li><a href="/shop">{{$category->name}}</a></li>
                           @endforeach funzionante
                        </ul>--}}



                        <li><a href="/shop/Man">Man</a></li>
                        {{--<ul class="dropdown">
                            <li><a href="/shop">T-Shirts</a></li>
                            <li><a href="/shop">Polo</a></li>
                            <li><a href="/shop">Shirts</a></li>
                            <li><a href="/shop">Jackets</a></li>
                            <li><a href="/shop">Trench</a></li>
                        </ul>--}}


                        <li><a href="/shop/Kid">Kid</a></li>
                        {{--<ul class="dropdown">
                            <li><a href="/shop">Dresses</a></li>
                            <li><a href="/shop">Shirts</a></li>
                            <li><a href="/shop">T-shirts</a></li>
                            <li><a href="/shop">Jackets</a></li>
                            <li><a href="/shop">Trench</a></li>
                        </ul>--}}


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
                <form action="#" method="post">
                    <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <!-- Favourite Area -->
            <div class="favourite-area">
                <a href="#"><img src={{asset('img/core-img/heart.svg')}} alt=""></a>
            </div>
            <!-- User Login Info -->
            <div class="user-login-info">
                <a href="#"><img src={{asset('img/core-img/user.svg')}} alt=""></a>
            </div>
            <!--user sign i n -->
            <div class="user-login-info">
                <a href="/login">Sign in </a>
            </div>

            <!-- Cart Area -->
            <div class="cart-area">
                <a href="#" id="essenceCartBtn"><img src={{asset('img/core-img/bag.svg')}} alt=""> <span>3</span></a>
            </div>
        </div>

    </div>
</header>

