$(document).ready(function() {
    $('ul').on('click','li' ,function(e){

        var pd = $(this).attr('value');

        if(pd!=null) {
            console.log(pd);

            $.get(pd, function (data) {
                $('#html').html(data);
                console.log('cazzi');
            });

        }



}); });