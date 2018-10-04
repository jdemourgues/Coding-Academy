$(document).ready(function()
{
    $('.platypus').click(function() {
        $(this).css('position','absolute');
        $(this).animate({right: '150px', bottom: '200px'});
        $(this).css('background-color','green');
        });
});
 //   $("#message").html("<b>Hello world!</b>");