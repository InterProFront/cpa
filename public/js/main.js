/**
 * Created by Косаностра on 21.04.2016.
 */
$(document).ready(function(){
    // Слайдер на главной
    $('.slider-content').bxSlider({
        mode: 'fade',
        pager: true,
        controls: false
    });

    //Меню для мобильных экранов
    $('.menu-button').on('click',function(){
        $('.popup-menu').slideToggle();
    });

    $(window).on('resize',function(){
        if ($(window).width() >= '900' ){
            $('.popup-menu').css('display','flex');
        }else{
            $('.popup-menu').css('display','none');
        }
    });

    //Инициализация галлереи
    $('#second a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1], // Will preload 0 - before current, and 1 after the current image
            tCounter: '%curr% из %total%'
        }
    });

    $('#first a').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1], // Will preload 0 - before current, and 1 after the current image
            tCounter: '%curr% из %total%'
        }
    });

    for(var i = 1; i<= 6; i++){
        $('#gall_'+i+' a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1], // Will preload 0 - before current, and 1 after the current image
                tCounter: '%curr% из %total%'
            }
        });
    }

    //popups
    $('.ask').magnificPopup({
       type:'inline',
        midClick: true
    });

    $('.join').magnificPopup({
        type:'inline',
        midClick: true
    });

    $('.anchor .link').on('click',function(){
        var offser = $($(this).attr('href')).offset().top;
        $("html, body").animate({ scrollTop: offser }, 600);
    });
});