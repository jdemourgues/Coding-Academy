function countGs(str){
var n = 0;
var c = 0;
    while (n < str.length){
        if (str[n] === "G"){
            c++;
        }
        n++
    }
return c;
}
console.log(countGs("BebereG"));
