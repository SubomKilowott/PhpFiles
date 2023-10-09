function generateFibonacciSeries() {
    const number = parseInt(document.getElementById("number").value);
    const outputDiv = document.getElementById("output");

    if (isNaN(number) || number <= 0) {
        outputDiv.textContent = "Please enter a valid positive number of terms.";
        return;
    }

    const fibonacci = [0, 1];

    for (let i = 2; i <= number-1; i++) {
        fibonacci.push(fibonacci[i - 1] + fibonacci[i - 2]);
    }

    outputDiv.textContent = "Fibonacci series with " + number + " terms: " + fibonacci.join(" ");
}
