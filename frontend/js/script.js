jQuery(function($) {
    $(document).ready(function () {

        if($('form').hasClass('uk-search')){
            $('.js-button-search').click(function (){
                var parentElement = $(this).closest('form');
                if(parentElement.hasClass('form-hidden')){
                    parentElement.removeClass('form-hidden');
                    return false;
                }
            });

            $('body').click(function (){
                $('.uk-search:not(.uk-search-offcanvas)').addClass('form-hidden');
            });
        }

    });
});


