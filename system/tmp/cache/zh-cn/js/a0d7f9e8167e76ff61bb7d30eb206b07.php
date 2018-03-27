<?php if(!defined('RUN_MODE')) die();?>v.theme = {"template":"mobile","theme":"default","device":"mobile"};;$().ready(function() { $('#execIcon').click(function(){ $('#execInfoBar').toggle();});}); ;
$(function()
{
    var countLink  = '/index.php/cart-count.mhtml';
    var browseLink = '/index.php/cart-browse.mhtml';
    
    $.refreshCart = function(twinkle)
    {
        $.getJSON(countLink, function(data)
        {
            if($.isPlainObject(data) && data.result === 'success')
            {
                var $count = $('.cart-count').text(data.count).toggleClass('hide', data.count < 1);
                if(data.count > 0 && twinkle)
                {
                    $count.addClass('twinkle');
                    setTimeout(function(){$count.removeClass('twinkle')}, 200);
                    if(window.v && window.v.addToCartSuccess) $.messager.success(window.v.addToCartSuccess + "<div><a class='btn success dismiss' href=" + browseLink + ">" + window.v.gotoCart + " <i class='icon-arrow-right'></i></a><div class='msger-cart-count'><i class='icon icon-shopping-cart icon-s3'></i><strong class='cart-count badge'>" + data.count + "</strong></div></div>", {time: 10000, cssClass: 'msger-cart'});
                }
            }
        });
    };
    
    $.refreshCart();
});
