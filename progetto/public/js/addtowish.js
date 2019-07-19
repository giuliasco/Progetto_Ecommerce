$(document).ready(function(){
    var data = $('.single_product_desc').attr("id");
    var favme = $(".favme");
    favme.on('click', function () {
        console.log()


       var ciaone = $(this).attr('class');




        if( ciaone === "favme fa fa-heart is_animating") { // (str1.equals(str2) == true
            $(this).toggleClass('active');

            url = '/shop/single-product-details/addtowish';
            $.get(url, {id: data}, function (response) {


                $('.wisheshandler').html(response);

                Swal.fire({
                    type: 'success',
                    title: 'Added to Wishlist!',
                    showConfirmButton: false,
                    timer: 3000
                });


            });
        }
        else{
            $(this).toggleClass('active');

            url = '/shop/single-product-details/removefromwish';
            $.get(url, {id :data}, function(response){

                Swal.fire({
                    type: 'success',
                    title: 'Removed from Wishlist!',
                    showConfirmButton: false,
                    timer: 3000
                });
            });


        }
    });




});