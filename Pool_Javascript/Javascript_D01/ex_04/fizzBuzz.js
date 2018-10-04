function fizzBuzz(){
    var c = 2;
    process.stdout.write("1");
    while (c <= 20){
        if ((c % 3 === 0) && (c % 5 === 0))
            process.stdout.write(", FizzBuzz");
        else if (c % 5 === 0)
            process.stdout.write(", Buzz");
        else if (c % 3 === 0)
            process.stdout.write(", Fizz");
        else
            process.stdout.write(", "+c);
        c++;

    }
console.log();
}
fizzBuzz();