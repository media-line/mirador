jQuery(function($) {
    $(document).ready(function () {

        //Появление строки поиска
        if($('form').hasClass('uk-search')){
            $('.js-button-search').click(function (){
                var parentElement = $(this).closest('form');
                if(parentElement.hasClass('form-hidden')){
                    parentElement.removeClass('form-hidden');
                    return false;
                }
            });

            $(document).click(function(e){
                if ($('.uk-search:not(.uk-search-offcanvas)').has(e.target).length === 0){
                    $('.uk-search:not(.uk-search-offcanvas)').addClass('form-hidden');
                }
            });
        }

        //Наведение на превью товаров
        if($('div').hasClass('catalog-block-products_list')){
            $('.catalog-block-products_list-item-holder').hover(function (){
                //$(this).closest('.catalog-block-products_list-item').addClass('uk-hover');
                $(this).addClass('uk-hover');
                $(this).find('.catalog-block-products_list-item-additional').addClass('uk-hover');
            });
            $('.catalog-block-products_list-item-holder').mouseleave(function (){
                $(this).removeClass('uk-hover');
                $(this).find('.catalog-block-products_list-item-additional').removeClass('uk-hover');
            });
        }

    });

});

$(window).on('load', function() {

    var tabletWidth = 960; //ширина экрана планшетов

    //Слайдер "Спроектировать дверь" на главной
    if($('div').hasClass('advantages-block-slideshow')){
        if(tabletWidth > $(this).width()){
            //правка высоты блоков
            var maxHeightLeft = 0;
            var maxRighttLeft = 0;

            $('.advantages-block-slider-left').each(function () {
                if(maxHeightLeft < $(this).height()) {
                    maxHeightLeft = $(this).height();
                }
            });

            $('.advantages-block-slider-right').each(function () {
                if(maxRighttLeft < $(this).height()) {
                    maxRighttLeft = $(this).height();
                }
            });

            $('.advantages-block-slider-left').height(maxHeightLeft);
            $('.advantages-block-slider-right').height(maxRighttLeft);

        }
        UIkit.slideshow('.advantages-block-slideshow', {
            animation: 'scale'
        });
    }
});

