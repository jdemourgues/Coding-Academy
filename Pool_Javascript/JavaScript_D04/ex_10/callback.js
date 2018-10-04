$(document).ready(function()
{
    $('.test').click(function() {
        $(this).hide("slow", function(){
            alert("The paragraph is now hidden.")
        });
    });
});
 //   $("#message").html("<b>Hello world!</b>");