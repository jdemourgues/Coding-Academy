document.getElementsByTagName("footer")[0].getElementsByTagName("div")[0].onclick = function() {
    var name = prompt("Your name please");
    while (name == "") {
        name = prompt("Your name please");
    }
    confirm("Are you sure that " + name + " is your name ?");
         document.getElementsByTagName("footer")[0].getElementsByTagName("div")[0].innerHTML = "Hello " + name;

}