$(function(){
    'use strict';
    //Hide Placeholder on form foucs
    $('[placeholder]').foucs(function(){
        $(this).attr('data-text', $(this).attr('placeholder'));
        $(this).attr('placeholder','');
    }).blur(function(){
        $(this).attr('placeholder',$(this).attr('data-text'));
    });
});