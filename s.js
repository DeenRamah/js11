// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit(celsius) {
    return (celsius * 9/5) + 32;
  }

  // Function to convert Fahrenheit to Celsius
  function fahrenheitToCelsius(fahrenheit) {
    return (fahrenheit - 32) * 5/9;
  }

  // Function to get user input
  function getUserInput(promptMessage) {
    return parseFloat(prompt(promptMessage));
  }

  // Get user input for temperature and conversion type
  var temperature = getUserInput("Enter the temperature value:");
  var conversionType = prompt("Enter 'C' to convert to Celsius or 'F' to convert to Fahrenheit:").toUpperCase();

  // Perform the conversion and display the result
  if (conversionType === 'C') {
    var result = fahrenheitToCelsius(temperature);
    document.write(temperature + " Fahrenheit is equal to " + result + " Celsius.");
  } else if (conversionType === 'F') {
    var result = celsiusToFahrenheit(temperature);
    document.write(temperature + " Celsius is equal to " + result + " Fahrenheit.");
  } else {
    document.write("Invalid conversion type. Please enter 'C' or 'F'.");
  }