$(document).ready(function () {
    $('.addcart').click(function (e) { 
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var prod_qty = $(this).closest('.product_data').find('.qty-input').val();
        $.ajaxSetup({
           headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            url: "/addcart",
            data: {
                'prod_id' : prod_id,
                'prod_qty' : prod_qty,
            },
            success: function (response) {
                swal.fire(response.status);
            }
        });

    });
    $('.btn-increment').click(function (e) { 
        e.preventDefault();
        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
         value = isNaN(value) ? 0 : value;
        if(value < 10){
            value ++ ;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

});
$(document).ready(function () {
    $('.btn-decrement').click(function (e) { 
        e.preventDefault();
        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
         value = isNaN(value) ? 0 : value;
        if(value > 1){
            value -- ;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    $('.delete-cart').click(function (e) { 
        e.preventDefault();
        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajaxSetup({
            headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             }
         });
        $.ajax({
            method: "POST",
            url: "/deletecart",
            data: {
              'prod_id' : prod_id,
            },
           
            success: function (response) {
                window.location.reload();
                Swal.fire(response.status);
            }
        });
    });
$('.changeqty').click(function (e) { 
    e.preventDefault();
    var prod_id = $(this).closest('.product_data').find('.prod_id').val();
    var qty = $(this).closest('.product_data').find('.qty-input').val();
    data = {
        'prod_id' : prod_id,
        'prod_qty' : qty,
    }
    $.ajaxSetup({
        headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
    $.ajax({
        method: "POST",
        url: "/updatecart",
        data: data,
        success: function (response) {
            window.location.reload();
           
        }
    });
});
});