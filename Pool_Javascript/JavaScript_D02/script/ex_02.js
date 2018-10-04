var count = 1;
document.getElementsByTagName("footer")[0].getElementsByTagName("div")[0].onclick = function() {
    document.getElementsByTagName("footer")[0].getElementsByTagName("div")[0].innerHTML = count;
    count++;
};