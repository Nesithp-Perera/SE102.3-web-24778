
idNum = prompt("Enter your NIC number:");

if (idNum.length < 12) {
  window.alert("Invalid NIC number.");
} 
else 
{
  yBirth = idNum.substr(0, 4);
  document.write("Year of Birth: " + yBirth);
}
