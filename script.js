
// Sign In/Sign Up Functionality
const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signup');

signUpButton.addEventListener('click', function() {
    signInForm.style.display = "none";
    signUpForm.style.display = "block";
});

signInButton.addEventListener('click', function() {
    signInForm.style.display = "block";
    signUpForm.style.display = "none";
});

const signOutButton = document.getElementById('signOutButton');
const logoutNotification = document.getElementById('logoutNotification');

signOutButton.addEventListener('click', function() {
    logoutNotification.style.display = 'block';
    
    setTimeout(function() {
        logoutNotification.style.display = 'none';
    }, 3000);
});

