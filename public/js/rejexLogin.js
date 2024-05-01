document.getElementById('form').addEventListener('submit', e => {
    e.preventDefault();
 
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    if (validateInput(email, /^[^@\s]+@[^@\s]+\.[^@\s]+$/, 'emailFeedback') &&
       validateInput(password, /^[a-zA-Z0-9].*$/, 'passwordFeedback'))  {
        document.getElementById('form').submit();
    } else {
        console.log('Validation failed.');
    }
 });
 
 document.getElementById('email').addEventListener('input', function() {
    validateInput(this, /^[^@\s]+@[^@\s]+\.[^@\s]+$/, 'emailFeedback');
 });
 document.getElementById('password').addEventListener('input', function() {
    validateInput(this, /^[a-zA-Z\d].{6,}[\S]$/
 , 'passwordFeedback');
 });
 
 function validateInput(input, regex, feedbackId) {
    const feedbackElement = document.getElementById(feedbackId);
    if (regex.test(input.value)) {
        input.className =
            'block w-full py-3 px-2 bg-transparent border-2 border-green-500 rounded-full focus:outline-none';
        feedbackElement.textContent = '';
        return true;  
    } else {
        input.className =
            'block w-full py-3 px-2 bg-transparent border-2 border-red-500 rounded-full focus:outline-none';
        feedbackElement.textContent = 'Please enter a valid ' + input.placeholder.toLowerCase() + '.';
        return false; 
    }
 }