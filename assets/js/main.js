
$(document).ready(function(){
    //
    $(window).resize(function(){
        if( $('body').width() >= 992 ){
            $('.sidebar').removeClass('is-visible');
            $('.layout-static').removeClass('is-visible');
        }
    });

    $('.drawer-toggler').click(function(){
        $('.sidebar').addClass('is-visible');
        
        $('.layout-static').addClass('is-visible');
    });

    $('.layout-static').click(function(){
        
        $('.sidebar').removeClass('is-visible');
        $('.layout-static').removeClass('is-visible');
    });
    

    
});