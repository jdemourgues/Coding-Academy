$(document).ready(function()
{
    $('p').on({
        mouseenter:function() {
            $(this).addclass("blue")},
        click:function() {
            $(this).toggle();
        }
    });
});
 //   $("#message").html("<b>Hello world!</b>");