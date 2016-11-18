/**
 * Created by Косаностра on 21.04.2016.
 */
$(document).ready(function(){

//======================================================================================================================
//-- Меню для мобильных устройств --
//======================================================================================================================
    $('.hamburger').on('click',function(){
        $(this).toggleClass('is-active');
        $('.popup-wrap').slideToggle();
    });

    $(window).on('resize',function(){
        if ($(window).width() >= '720' ){
            $('.popup-wrap').css('display','block');
        }else{
            if( !$('.hamburger').hasClass('is-active') ){
                $('.popup-wrap').css('display', 'none');
            }
        }
    });

    $('.menu-item a').each(function(){
       if( $(this).attr('href') == window.location.pathname && $(this).attr('href') != '/' ){
           $(this).addClass('active');
       }
    });
//======================================================================================================================
//-- Выпадающее меню в слайдере  --
//======================================================================================================================

    $('.white-popup select').selectmenu({}); // инициализация выпадающего списка

    $('.ui-selectmenu-button').on('click',function(){ // Функция для урезания размера выпадющего элемента то размеров поля
        width = $(this).outerWidth();
        $('.ui-menu').css('width',width-2);
    });

//======================================================================================================================
//-- LightBox Галлерея --
//======================================================================================================================

    for(var i = 1; i<= 6; i++){
        $('#gall_'+i+' a').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1],
                tCounter: '%curr% из %total%'
            }
        });
    }

//======================================================================================================================
//--  --
//======================================================================================================================

    $('.page-title-image').on('load',function(){
        $(this).removeClass('loaded');
    });

//======================================================================================================================
//-- Всплывающие формы --
//======================================================================================================================
    $('.ask').magnificPopup({
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });

    $('.join').magnificPopup({
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });
    $('.buy_service').magnificPopup({
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
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