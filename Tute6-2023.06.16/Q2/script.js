// Get the marks from the user
marks1 = parseInt(prompt("Enter number 1: ",""));
marks2 = parseInt(prompt("Enter number 2: ",""));
marks3 = parseInt(prompt("Enter number 3: ",""));
marks4 = parseInt(prompt("Enter number 4: ",""));
marks5 = parseInt(prompt("Enter number 5: ",""));

// Calculate the total
var totalMarks = marks1 + marks2 + marks3 + marks4 + marks5;

// Calculate the average
var averageMarks = totalMarks / 5;

// Display the total and average
document.getElementById("total").textContent = "Total Marks: " + totalMarks;
document.getElementById("average").textContent = "Average Marks: " + averageMarks;

function Grade() {
    // Check the average and display the result
    if (averageMarks > 30) {
        alert("Congratulations! You have passed.");
    } else {
        alert("You have failed.");
    }
}

