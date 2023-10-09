
function generateFizzBuzz() {
    let output = "";

    for (let i = 1; i <= 30; i++) {
        if (i % 3 === 0 && i % 5 === 0) {
            output += "Fizz Buzz<br>";
        } else if (i % 3 === 0) {
            output += "Fizz<br>";
        } else if (i % 5 === 0) {
            output += "Buzz<br>";
        } else {
            output += i + "<br>";
        }
    }

    
    const outputElement = document.getElementById("output");

    
    outputElement.innerHTML = output;
}


generateFizzBuzz();
