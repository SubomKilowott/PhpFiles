// bubblesort.js
function bubbleSort() {
    const n = parseInt(document.getElementById("n").value);
    const inputElements = document.getElementById("arr_elements").value;
    const arr = inputElements.split(",").map(item => parseInt(item.trim()));

    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n - 1; j++) {
            if (arr[j + 1] > arr[j]) {
                const temp = arr[j + 1];
                arr[j + 1] = arr[j];
                arr[j] = temp;
            }
        }
    }

    // Display the sorted array
    document.getElementById("result").innerHTML = "Sorted Array: " + arr.join(", ");
}
