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

    //im so sorry, fix it
    $('.popup-menu .item').on('click',function(){
        document.location.href = $(this).children('.menu-item').attr('href');
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //give a more news
    $('.more-news').on('click',function(){
        var id  =  $('.small-news .news').length;
        var deffered = $.ajax({
            type: 'GET',
            url: window.location.pathname+'/more/'+(id+1)
        });
        deffered.done(function(data){
            $('.small-news').append(data.complhtml);
        });
        deffered.success(function(data){
        });
        deffered.fail(function(){

        });
    });


});