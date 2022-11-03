const form = document.getElementById('form');
const first= document.getElementById('name');
const email = document.getElementById('email');
const number= document.getElementById('number')
const password = document.getElementById('password');
form.addEventListener('submit', e => {
    e.preventDefault();

    checkInputs();
});

function checkInputs() {
    // trim to remove the whitespaces
    const nameValue = first.value.trim();
    const emailValue = email.value.trim();
    const numberValue=number.value.trim();
    const passwordValue = password.value.trim();

    if (nameValue === '') {
        setErrorFor(first, 'Please enter your name');
    } else {
        setSuccessFor(first);
    }
    if (emailValue === '') {
        setErrorFor(email, 'Please enter your email');
    } else if (!isEmail(emailValue)) {
        setErrorFor(email, 'Email not valid');
    } else {
        setSuccessFor(email);
    }
    if (numberValue === ''){
        setErrorFor(number,"Please enter your monile number");
    }
        else{
            setSuccessFor(number);
        }
    
    if (passwordValue === '') {
        setErrorFor(password, 'Please enter password');
    } else if (isPassword(passwordValue)) {
        setSuccessFor(password);
    }else {
        setErrorFor(password,'atleast one number, one uppercase, lowercase letter, and atleast 8 character');
    }


}


function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
function isNumber(number){
    return /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/.test(number);
}

function isPassword(password){  
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(password);
}
