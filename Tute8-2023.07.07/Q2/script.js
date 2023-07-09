num1=parseInt(prompt("Enter number 1",""));
num2=parseInt(prompt("Enter number 2",""));
operation=prompt("Enter the operator from +,-,/,*","");

if(operation === "+"){
    num3=num1+num2;
    document.write("Addition of the number = "+num3);
}
else if(operation === "-"){
    num3=num1-num2;
    document.write("Substraction of the number = "+num3);
}
else if(operation === "/"){
    num3=num1/num2;
    document.write("Division of the number = "+num3);
}
else if(operation === "*"){
    num3=num1s*num2;
    document.write("multiplication of the number = "+num3);
}
else{
    window.alert("Invalid");
}