function getUserInput(promptMessage){
    return parseFloat(prompt(promptMessage));
}

function multiplyNumbers(num1, num2){
    return num1*num2;
}

function divideNumbers(num1, num1){
    if(num2 !==0){
    return num1/num2;
    }else
    {
        console.log("haha");
    }
}

//get user input
var num1 = getUserInput("Enter num1");
var num2 = getUserInput("Enter num2");

//calculate and display multiply
var multicationResult = multiplyNumbers(num1, num2);
document.write(multicationResult);

//calculate divivsion

var divivsionResults = divideNumbers(num1, num2);
document.write(divivsionResults);