/**
 * Created by Xing on 2015/6/29.
 */

$(function(){
    $('.navbar-nav').children().each(function(){
       $(this).mouseover(function(){
           $(this).siblings().removeClass('active');
           $(this).addClass('active');
       }) ;
    });
});