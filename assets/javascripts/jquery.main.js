
/*
    sticky navigation
*/
$(document).ready(function() {
    var stickyTop = $('#main-header').offset().top;
    
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();
             
        if (scrollTop > stickyTop) { 
            $('html').addClass('sticky');
        } else {
            $('html').removeClass('sticky'); 
        }
    };

    $(window).scroll(function() {
        stickyNav();
    });
});


/* 
    choose filiale
*/
$(document).ready(function() {
    var $chooseCustomerItems = $('#choose-customer li');
    var $showCustomerItems = $('#show-customer article');

    $showCustomerItems.removeClass('active');
    $('#show-customer article:first-child').addClass('active');

    $chooseCustomerItems.click(function() {
        $chooseCustomerItems.removeClass('active');
        $showCustomerItems.removeClass('active');
        
        $(this).addClass('active');
        $('#'+$(this).data('show-customer')).addClass('active');
    });
});

/* 
    firmware download
*/
$(document).ready(function() {
    $('#download-form').submit(function( event ) {
        event.preventDefault();

        var type = '',
            fileExtension = '',
            router;

        switch ($('#download-form-type').val()) {
            case '0':
                type = 'factory';
                break;
            case '1':
                type = 'sysupgrade';
                fileExtension = '-sysupgrade';
                break;
            default:
                type = 'factory';
        }

        router = $('#download-form-router').val();

        if(router === '-1') {
            window.alert('Bitte wähle eine Router aus.');
        } else {
            window.location.href = 'media/firmware/'+type+'/'+router+fileExtension+'.bin';
        }

        return false;
    });
});

/*
    smooth scrolling
*/
$(function() {
    var $root = $('html, body');

    $('a').click(function() {
        var href = $.attr(this, 'href');
        $root.animate({
            scrollTop: $(href).offset().top
        }, 500);
        return false;
    });
});