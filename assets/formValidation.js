const form = document.getElementById('form');
const firstName = document.getElementById('first-name');
const lastName = document.getElementById('last-name');
const email = document.getElementById('email');
const whatsappNum = document.getElementById('phone');
const experience = document.getElementById('experience');
const seniority = document.getElementById('seniority');

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
    const firstNameValue = firstName.value.trim();
    const lastNameValue = lastName.value.trim();
    const emailValue = email.value.trim();
    const whatsappNumValue = whatsappNum.value.trim();
    const experienceValue = experience.value.trim();
    const seniorityValue = seniority.value.trim();

    if(firstNameValue === '') {
        setError(firstName, 'First name is required');
    } else {
        setSuccess(firstName);
    }

    if(lastNameValue === '') {
        setError(lastName, 'Last name is required');
    } else {
        setSuccess(lastName);
    }


    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(whatsappNumValue === '') {
        setError(whatsappNum, 'Whatsapp number is required');
    } else {
        setSuccess(whatsappNum);
    }

    if(experienceValue === '') {
        setError(experience, 'Experience is required');
    } else {
        setSuccess(experience);
    }

    if(seniorityValue === '') {
        setError(seniority, 'Seniority is required');
    } else {
        setSuccess(seniority);
    }

   /* if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
    } else {
        setSuccess(password2);
    }*/

};
