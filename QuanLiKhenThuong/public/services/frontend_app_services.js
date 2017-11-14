$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
        }
    });
    //
    // CKEDITOR.replaceClass = 'ckeditor';

    jsInTrangChu();


});
function jsInTrangChu() {
    initshow();
    loadMore();
    customerOderRightTitle();
    customerOderFooter();
}

function customerOderRightTitle() {
    $('#customer_right_title').click(function() {
        alert('title');
    });
}

function customerOderFooter() {
    $('#customer_footer').click(function() {
        $.ajax({
            url: '/api/customer',
            method: 'POST',
            data: {
                "_token": "{{ csrf_token() }}",

            },
            success: function (response) {
                console.log('Request success', response);
            },
            error: function (response) {
                console.log('Request error', response);
            }
        });
    });
}

function initshow(){
    var productsLine2 = $('.showOder1');
    if(productsLine2.length==0){
        $('#loadMore').attr('hidden',true);
    }
    $('.showOder0').attr('hidden',false);
}

function loadMore() {
    $( "#loadMore" ).click(function() {
        var next = $(this).attr('next');
        var products = $('.showOder'+next);
        products.attr('hidden',false);

        $(this).attr('next',parseInt(next)+1);

        var products2 = $('.showOder'+(parseInt(next)+1));
        if(products2.length==0){
            $(this).attr('hidden',true);
            return;
        }
    });
}