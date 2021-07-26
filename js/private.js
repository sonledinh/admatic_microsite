
$(document).ready(function(){

    $('.tab-clc a').click(function(){
        var tab_id = $(this).attr('data-tab');
        $('.tab-clc a').removeClass('active');
        $('.info-tab').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    })

    $('.list-tab-ads a').click(function(){
        var tab_id = $(this).attr('data-tab');
        $('.list-tab-ads a').removeClass('active');
        $('.tab-content-ads').removeClass('active');

        $(this).addClass('active');
        $("#"+tab_id).addClass('active');
    })

})