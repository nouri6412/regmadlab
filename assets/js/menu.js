(function ($) {
    $(document).ready(function () {
        $('nav .btn-open').on('click', function (e) {
            jQuery('.main-menu').css('right','0');
            jQuery(this).css('display','none');
            jQuery('nav .btn-close').css('display','block');
        });
        $('nav .btn-close').on('click', function (e) {
            jQuery('.main-menu').css('right','-85%');
            jQuery(this).css('display','none');
            jQuery('nav .btn-open').css('display','block');
        });
    });
    
})(jQuery)