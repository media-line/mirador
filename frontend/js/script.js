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

        //Наведение на превью категорий
        if($('div').hasClass('category_list')){
            $('.category_list-item').hover(function (){
                $(this).addClass('uk-hover');
                $(this).find('.category_list-item-additional').addClass('uk-hover');
        });
            $('.category_list-item').mouseleave(function (){
                $(this).removeClass('uk-hover');
                $(this).find('.category_list-item-additional').removeClass('uk-hover');
            });
        }

        //Фикс шиирны блока описания товара
        if($('div').hasClass('product_full-desctription-content')) {
            var productDesc = $('.product_full-desctription-content');

            productFullDescWidthHandler(productDesc);
            $(window).resize(function(){
                productFullDescWidthHandler(productDesc);
            });
        }

        //Наведение на превью товаров
        /*if($('div').hasClass('product_list')){
            $('.catalog-block-products_list-item-holder').hover(function (){
                $(this).addClass('uk-hover');
                $(this).find('.catalog-block-products_list-item-additional').addClass('uk-hover');
            });
            $('.catalog-block-products_list-item-holder').mouseleave(function (){
                $(this).removeClass('uk-hover');
                $(this).find('.catalog-block-products_list-item-additional').removeClass('uk-hover');
            });
        }*/


        
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


    /*if($('div').hasClass('category_list')){
        $('.category_list-item').hover(function (){
            $(this).addClass('uk-hover');
            $(this).find('.category_list-item-additional').addClass('uk-hover');
            //var childHeight = $(this).find('.category_list-item-holder').height();
            //var childHeight = $(this).find('.category_list-item-holder').get(0).scrollHeight;
           // $(this).height(childHeight);
        });
        $('.category_list-item').mouseleave(function (){
           // $(this).removeAttr('style', '');
            $(this).removeClass('uk-hover');
            $(this).find('.category_list-item-additional').removeClass('uk-hover');
        });
    }*/
});

UIkit.on('afterready.uk.dom', function () {
    UIkit.$('.product_full-images-main').off('swipeRight swipeLeft');
});

function productFullDescWidthHandler(element) {

    var windowWidth = $(window).width();

    var offsetLeft = element.offset().left;
    var offsetRight = windowWidth - element.offset().left - element.width();

    element.css({
        'margin-left': -offsetLeft,
        'padding-left': offsetLeft,
        'margin-right': -offsetRight,
        'padding-right': offsetRight
    });


}