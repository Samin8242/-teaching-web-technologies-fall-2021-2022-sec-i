const form = document.getElementById('form');
const name = document.getElementById('name');
const password = document.getElementById('password');
const email = document.getElementById('email');
const dob = document.getElementById('dob');
const address = document.getElementById('address');
//const gender = document.getElementById('gender');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    //const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const dobValue = dob.value.trim();
    const addressValue = address.value.trim();
    //const genderValue = gender.value.trim();

    /*if(nameValue === '') {
        setError(name, 'name is required');
    } else {
        setSuccess(name);
    }*/

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 3 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(dobValue === '') {
        setError(dob, 'Date is required');
    } else {
        setSuccess(dob);
    }
    if(addressValue === '') {
        setError(address, 'Address is required');
    } else {
        setSuccess(address);
    }



};
