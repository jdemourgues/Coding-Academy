$(document).ready(function()
{
    $("#bt1").click(function() {var a = $('#listItem').val();
        $('section').append("<div>"+ a +"</div>");
    });
});
 //   $("#message").html("<b>Hello world!</b>");