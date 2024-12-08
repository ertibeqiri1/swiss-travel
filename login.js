//qasja e elementeve
const title = document.getElementById('title');
const nameField = document.getElementById('nameField');
const signupBtn = document.getElementById('signupBtn');
const signinBtn = document.getElementById('signinBtn');
const inputs = document.querySelectorAll('.input-field input');

//Sign In pamja
signinBtn.addEventListener('click', () => {
    title.textContent = 'Sign In'; 
    nameField.style.maxHeight = '0'; 
    signinBtn.classList.remove('disable'); 
    signupBtn.classList.add('disable'); 
    clearErrorMessages(); 
});
//Sign up pamja
signupBtn.addEventListener('click', () => {
    title.textContent = 'Sign Up'; 
    nameField.style.maxHeight = '65px';
    signupBtn.classList.remove('disable'); 
    signinBtn.classList.add('disable'); 
    clearErrorMessages(); 
});

// Validimi
function validateForm() {
    let isValid = true;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    inputs.forEach((input) => {
        const errorField = input.nextElementSibling; // Errori

        if (input.value.trim() === '') {
            errorField.textContent = `${input.placeholder} is required.`;
            isValid = false;
        } else if (input.type === 'email' && !emailRegex.test(input.value.trim())) {
            errorField.textContent = 'Please enter a valid email address.';
            isValid = false;
        } else if (input.type === 'password' && input.value.trim().length < 8) {
            errorField.textContent = 'Password must have at least 8 charachters.';
            isValid = false;
        } else {
            errorField.textContent = ''; // largo errorin
        }
    });

    return isValid;
}

// largo errorin
function clearErrorMessages() {
    const errorFields = document.querySelectorAll('.error');
    errorFields.forEach((errorField) => {
        errorField.textContent = '';
    });
}

// Sign UP
signupBtn.addEventListener('click', () => {
    if (title.textContent === 'Sign Up' && validateForm()) {
        alert('Sign Up successful!');
    }
});

// Sign In
signinBtn.addEventListener('click', () => {
    if (title.textContent === 'Sign In' && validateForm()) {
        alert('Sign In successful!');
    }
});