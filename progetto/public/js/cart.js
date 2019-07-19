
$( document ).ready(function() {
    $('#addcart').click(function () {

        var sizes= $('.current').attr("value");
        var data = $('.single_product_desc').attr("id");
        console.log(data);
        console.log(sizes);
        $.get( "/shop/single-product-details/"+data+"/"+sizes+"/add" ,  function( data ) {
            console.log(data);
            $( ".right-side-cart-area" ).html( data);
                   });
    });
});


    $(document).on("click", '.product-remove', function () {
        var data = $(this).attr("id");
        console.log(data) ;
        $.get( "/shop/single-product-details/"+data+"/remove", function( data ) {
            $( ".right-side-cart-area" ).html( data );

        });
    });

