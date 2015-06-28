/**
 * Created by Xing on 2015/6/24.
 */

$(function(){
    hideall();
    $('.instrument-body').first().show();
    $('li a').each(function(){
        $(this).click(function(){
            //hide all
            hideall();
            tmplink = $(this).attr('href');
            $(tmplink).show();
        });
    });
});

function hideall(){
    $('.instrument-body').each(function(){
        $(this).hide();
    });
}