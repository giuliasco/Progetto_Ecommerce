
$( document ).ready(function() {
    $('#addcart').click(function () {
        var data = $('.single_product_desc').attr("id");
        console.log(data) ;
        $.get( "/shop/single-product-details/"+data+"/add", function( data ) {
            $( ".right-side-cart-area" ).html( data );
            alert( "Load was performed." );
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

