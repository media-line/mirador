jQuery(function($) {
    $(document).ready(function () {

        //Ширина экрана для планшетов
        var tabletWidth = 991;
        
        //Сворачивание меню на малых разрешениях
        if ($('ul').is('.main-menu-submenu')){
            sideMenuHundler('.nav-item.parent > a', '.main-menu-submenu', tabletWidth);
        } 
        if ($('ul').is('.sidebar-left-menu-submenu')){
            sideMenuHundler('.sidebar-left-menu li.parent > a', '.sidebar-left-menu-submenu', 9999);
        }
        
        //Главный слайдер на главной странице
        if ($('div').is('.js-slick-slider')){
            $('.js-slick-slider').slick({
                autoplay: true,
                dots: false,
                arrows: false
            });
        }
        
        //блок с сылками в шапке справа
        if ($('a').is('.js-top_section-nav-close')){
            $('.js-top_section-nav-close').click(function(){
                $(this).closest('.js-top_section-nav').toggleClass('isclose');
                return false;
            });
        }
        
        //Прилипающие меню в сайдбаре
        if ($('div').is('.js-sticky')){
            var leftSidebarWidth = $('.sidebar-left-menu').width();
            var rightSidebarWidth = $('.sidebar-right-menu').width();
            
            if($(window).width() > tabletWidth){
                $('.js-sticky').fixer({
                    gap: 60 
                });
                
                $('.sidebar-left-menu').width(leftSidebarWidth);
                $('.sidebar-right-menu').width(rightSidebarWidth);
            }
            
            $(window).resize(function(){
                leftSidebarWidth = $('.sidebar-left-menu').width();
                rightSidebarWidth = $('.sidebar-right-menu').width();
                $('.sidebar-left-menu').width(leftSidebarWidth);
                $('.sidebar-right-menu').width(rightSidebarWidth);
                $('.js-sticky').attr('style', '');
            });
        }
        
        //Плавная прокрутка якорных ссылок
        $('a[href^="#"]').click(function(){
            var anchor = $(this);
            
            if(anchor.attr('href') != '#'){
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top
                }, 700);
            }
            
            return false;
        });
        
        //Анимация блока категорий
        if ($('section').is('.categories_block')){
            var height = 355;
            var scale = 1.3;
            var itemClass = '.categories_block-item';
            var bgClass = '.categories_block-item-bg';
            var linkClass = '.categories_block-item-link';
            var item1 = $(itemClass + ':nth-child(1)');
            var item2 = $(itemClass + ':nth-child(2)');
            var item3 = $(itemClass + ':nth-child(3)');
            var item4 = $(itemClass + ':nth-child(4)');
            var margin = (item1.width() * scale) - item1.width();
            //var scaleMargin = (item1.width() * scale) - item1.width();
            
            
            item1.hover(function(){
                $(this).children(bgClass).css({
                    'transform': 'scale(1.3)'
                });
                $(this).children(linkClass).css({
                    'transform': 'translate3d(0, 0, 0)'
                });
                item2.children(bgClass).css({
                    'transform': 'scale(0.7, 1.3)'
                });
                item2.children(linkClass).css({
                    'transform': 'translate3d(37%, 0, 0)'
                });
                
                item3.children(bgClass).css({
                    'transform': 'scale(1.3, 0.7)'
                });
                item3.children(linkClass).css({
                    'transform': 'translate3d(0, 30%, 0)'
                });
                item4.children(bgClass).css({
                    'transform': 'scale(0.7)'
                });
                item4.children(linkClass).css({
                    'transform': 'translate3d(37%, 30%, 0)'
                });
                
                
                $(this).children(linkClass).width($(this).children(bgClass).width() * scale);
                $(this).children(linkClass).height($(this).children(bgClass).height() * scale);
                
                
                $(item2).children(linkClass).width($(item2).children(bgClass).width() / scale);
                $(item2).children(linkClass).height($(item2).children(bgClass).height() / scale);
                
                
                $(item3).children(linkClass).width($(item3).children(bgClass).width() * scale);
                $(item3).children(linkClass).height($(item3).children(bgClass).height() / scale);
                
                
                $(item4).children(linkClass).width($(item4).children(bgClass).width() / scale);
                $(item4).children(linkClass).height($(item4).children(bgClass).height() / scale);
                
            });
            
            item2.hover(function(){
                $(this).children(bgClass).css({
                    'transform': 'scale(1.3)'
                });
                $(this).children(linkClass).css({
                    'transform': 'translate3d(-23%, 0, 0)'
                });
                
                item1.children(bgClass).css({
                    'transform': 'scale(0.7, 1.3)'
                });
                
                item3.children(bgClass).css({
                    'transform': 'scale(0.7)'
                });
                item3.children(linkClass).css({
                    'transform': 'translate3d(0, 30%, 0)'
                });
                item4.children(bgClass).css({
                    'transform': 'scale(1.3, 0.7)'
                });
                item4.children(linkClass).css({
                    'transform': 'translate3d(-23%, 30%, 0)'
                });
                
                $(this).children(linkClass).width($(this).children(bgClass).width() * scale);
                $(this).children(linkClass).height($(this).children(bgClass).height() * scale);
                
                
                $(item1).children(linkClass).width($(item1).children(bgClass).width() / scale);
                $(item1).children(linkClass).height($(item1).children(bgClass).height() * scale);
                
                
                $(item3).children(linkClass).width($(item3).children(bgClass).width() / scale);
                $(item3).children(linkClass).height($(item3).children(bgClass).height() / scale);
                
                
                $(item4).children(linkClass).width($(item4).children(bgClass).width() * scale);
                $(item4).children(linkClass).height($(item4).children(bgClass).height() / scale);
                
            });
            
            item3.hover(function(){
                $(this).children(bgClass).css({
                    'transform': 'scale(1.3) translate3d(0, 0, 0)'
                });
                $(this).children(linkClass).css({
                    'transform': 'translate3d(-30%, 0, 0)'
                });
                item1.children(bgClass).css({
                    'transform': 'scale(1.3, 0.7)'
                });
                item2.children(bgClass).css({
                    'transform': 'scale(0.7)'
                });
                item2.children(linkClass).css({
                    'transform': 'translate3d(37%, 0, 0)'
                });
                item4.children(bgClass).css({
                    'transform': 'scale(0.7, 1.3)'
                });
                item4.children(linkClass).css({
                    'transform': 'translate3d(37%, 0, 0)'
                });
                
                $(this).children(linkClass).width($(this).children(bgClass).width() * scale);
                $(this).children(linkClass).height($(this).children(bgClass).height() * scale);
                
                
                $(item1).children(linkClass).width($(item1).children(bgClass).width() * scale);
                $(item1).children(linkClass).height($(item1).children(bgClass).height() / scale);
                
                
                $(item2).children(linkClass).width($(item2).children(bgClass).width() / scale);
                $(item2).children(linkClass).height($(item2).children(bgClass).height() / scale);
                
                
                $(item4).children(linkClass).width($(item4).children(bgClass).width() / scale);
                $(item4).children(linkClass).height($(item4).children(bgClass).height() * scale);
                
            });
            
            item4.hover(function(){
                $(this).children(bgClass).css({
                    'transform': 'scale(1.3)'
                });
                $(this).children(linkClass).css({
                    'transform': 'translate3d(-25%, -25%, 0)'
                });
                item1.children(bgClass).css({
                    'transform': 'scale(0.7)'
                });
                item1.children(linkClass).css({
                    'transform': 'translate3d(0, 0, 0)'
                });
                item2.children(bgClass).css({
                    'transform': 'scale(1.3, 0.7)'
                });
                item2.children(linkClass).css({
                    'transform': 'translate3d(-23%, 0, 0)'
                });
                item3.children(bgClass).css({
                    'transform': 'scale(0.7, 1.3)'
                });
                
                $(this).children(linkClass).width($(this).children(bgClass).width() * scale);
                $(this).children(linkClass).height($(this).children(bgClass).height() * scale);
                
                
                $(item1).children(linkClass).width($(item1).children(bgClass).width() / scale);
                $(item1).children(linkClass).height($(item1).children(bgClass).height() / scale);
                
                
                $(item2).children(linkClass).width($(item2).children(bgClass).width() * scale);
                $(item2).children(linkClass).height($(item2).children(bgClass).height() / scale);
                
                
                $(item3).children(linkClass).width($(item3).children(bgClass).width() / scale);
                $(item3).children(linkClass).height($(item3).children(bgClass).height() * scale);
                
            });
            
            $(itemClass).mouseleave(function(){
                $(itemClass).children(bgClass).css({
                    'transform': 'scale(1)'
                });
                $(itemClass).children(linkClass).css({
                    'transform': 'translate3d(0, 0, 0)'
                });
                
                $(itemClass).children(linkClass).each(function(){
                    //console.log($(this).html() +' ' + ($(this).closest(itemClass).children(bgClass).outerWidth() / scale));
                    //$(this).width(($(this).closest(itemClass).children(bgClass).width() / scale));
                    $(linkClass).css({
                        'width': '100%',
                        'height': 'auto'
                    });
                    //$(this).height(($(this).closest(itemClass).children(bgClass).height() / scale));
                });
            });
            
        }

    });
    
    
    
    
    function sideMenuHundler(clickElement, subMenuClass, maxWindowWidth){
        $(clickElement).click(function(){
            if($(window).width() <= maxWindowWidth){
                    
                var parents = $(this).closest('ul').find('.parent');
                var subMenus = $(this).closest('ul').find(subMenuClass);
                var currentParent = $(this).closest('.parent');
                var currentSubMenu = currentParent.children(subMenuClass);
                    
                if((currentParent.hasClass('open')) || (currentSubMenu.is(':visible'))){
                    currentParent.removeClass('open');
                    currentSubMenu.slideUp(300);
                } else{
                    parents.removeClass('open');
                    subMenus.slideUp(300);
                    currentParent.addClass('open');
                    currentSubMenu.slideDown(300);
                }
                    
                return false;
            }
        });
            
        $(window).resize(function(){
            $(subMenuClass).attr('style', '');
            $(subMenuClass).closest('.parent').removeClass('open');
        });
    }
    

});


