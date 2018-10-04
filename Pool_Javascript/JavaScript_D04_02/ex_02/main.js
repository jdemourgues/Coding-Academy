$(document).ready(function(){
    $("#bt1").click(function() {
        var a = $('#input1').val();
        $('#list').append('<li>'+ a +'</li>');
        $('#list > li:last-child').addClass($('input[name=type]:checked').val());
    });
});


