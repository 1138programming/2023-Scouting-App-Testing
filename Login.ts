


function LoginCheck(input) {
    console.log(input);
    
    var targetString = "abcd";
    if (input == targetString) {
        
        window.location.href = 'main.html';
        console.log('re');

    }
    else {
        alert("Input does not match. Please try again.");
    }
}