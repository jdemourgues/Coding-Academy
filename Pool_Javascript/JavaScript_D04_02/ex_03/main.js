$(document).ready(function(){
    $("#bt1").click(function() {
        var a = $('#input1').val();
        $('#list').append('<li>'+ a +'</li>');
        $('#list > li:last-child').addClass($('input[name=type]:checked').val());
    });
    $("#search").click(function() {
//    $("#bt2").click(function() {
        $("li").hide();
        $("li").find($('#input2').val()).show();
//        $('input[name=searchType]:checked').each(function() {
//            $("." + $(this).val()).show();
        });
    });


