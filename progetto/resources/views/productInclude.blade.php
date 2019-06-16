@foreach($products as $product)


    <!-- Single Product -->
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="single-product-wrapper">
            <!-- Product Image -->
            <div class="product-img">
                <img src="{{asset('img/product-img/'.$product->path.'.jpg')}}" alt="">
                <!-- Hover Thumb -->
                <!--   <img class="hover-img" src="img/product-img/product-1.jpg" alt="">-->
                <!-- Favourite -->
                <div class="product-favourite">
                    <a href="#" class="favme fa fa-heart"></a>
                </div>
            </div>

            <!-- Product Description -->
            <div class="product-description">
                <span>{{$product->brand}}</span>
                <a href='single-product-details/{{$product->id}}'>
                    <h6>{{$product->name}}</h6>
                </a>
                <p class="product-price">{{$product->price}}</p>

                <!-- Hover Content -->
                <div class="hover-content">
                    <!-- Add to Cart -->
                    <div class="add-to-cart-btn">
                        <a href="#" class="btn essence-btn">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
