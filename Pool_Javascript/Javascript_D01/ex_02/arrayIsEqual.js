
var a = [1, 2];
var b = [1 ,2];

function arrayIsEqual(a, b){
    if (a.length !== b.length)
        var ret = false;
    else {
        var n = 0;
        while (n < a.length) {
            if (a[n] === b[n])
                var ret = true;
            else
                var ret = false;
            n++;
        }

    }
return ret
}
if (arrayIsEqual(a,b))
    console.log("True");
else
console.log("false");