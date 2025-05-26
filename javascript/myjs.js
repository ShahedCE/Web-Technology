

const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const amount = document.getElementById('amount');

const fnameError = document.getElementById('fname-error');
const lnameError = document.getElementById('lname-error');
const emailError = document.getElementById('email-error');
const phoneError = document.getElementById('phone-error');
const amountError = document.getElementById('amount-error');


document.getElementById("form").addEventListener('submit', (e) => {
    let hasError = false;

    // Clear old errors
    fnameError.innerHTML = '';
    lnameError.innerHTML = '';
    emailError.innerHTML = '';
    phoneError.innerHTML = '';
    amountError.innerHTML = '';


    // First name validation
    if (fname.value.trim() === '') {
        fnameError.innerHTML = 'First Name is required';
        hasError = true;
    }
    else if (!isNaN(fname.value)) {
        fnameError.innerHTML = 'Cannot be numeric';
        hasError = true;
    }

    // Last name validation
    if (lname.value.trim() === '') {
        lnameError.innerHTML = 'Last Name is required';
        hasError = true;
    }
    else if (!isNaN(lname.value)) {
        lnameError.innerHTML = 'Cannot be numeric';
        hasError = true;
    }

    // Email validation
    if (email.value.trim() === '') {
        emailError.innerHTML = 'Email is required';
        hasError = true;
    }
   
        // Phone validation
if (phone.value.trim() === '') {
    phoneError.innerHTML = 'Phone number is required';
    hasError = true;
}/*else if ((phone.value.length!=10) || (phone.value.length!=11 )) {
    phoneError.innerHTML = 'Phone number must contain 10 or 11 digits';
    hasError = true;
}*/
if (amount.value.trim() === '') {
    amountError.innerHTML = 'Amount is required';
    hasError = true;
}
 else if ((isNaN(amount.value)) || amount.value<=0) {
    amountError.innerHTML = 'Give a valid amount of Donation';
    hasError = true;
}


    if (hasError) {
        e.preventDefault(); // Stop the form from submitting
    }
});
