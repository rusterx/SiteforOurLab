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

    hidebody();
    $('.collapse').first().collapse('show');
    $('.panel-heading').each(function(){
        $(this).click(function(){
            hidebody();
            $(this).next().collapse('show');
        });
    });


});

function hideall(){
    $('.instrument-body').each(function(){
        $(this).hide();
    });

}

function hidebody(){
    $('.collapse').each(function(){
        $(this).collapse('hide');
    });
}