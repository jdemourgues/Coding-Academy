
function drawTriangle(height) {
    var number = 1;
    while (number <= height) {
        var n2 = 1;
        while (n2 <= number) {
            process.stdout.write("$");
            n2++;
        }
        console.log("");
        number++
    }
}

drawTriangle(-1);