const form = document.getElementById('connexion-form');
const username = document.getElementById('login');
// const email = document.getElementById('email');
const password = document.getElementById('password');
const small_login=document.getElementById("small_login");
const small_password=document.getElementById("small_password");

// const password2 = document.getElementById('password2');
var inputlogin=document.forms['form']['login'];
var inputpassword=document.forms['form']['password'];



function showError(input, message) {
    if(input==inputlogin){
        input.style.border="1px solid red";
        small_login.style.display="block";
        small_login.innerText=message;
    }
    if(input==inputpassword){
        input.style.border="1px solid red";
        small_password.style.display="block";
        small_password.innerText=message;
    }
}
//
function showSuccess(input) {
    if(input==inputlogin){
        input.style.border="1px solid green";
    }
    if(input==inputpassword){
        input.style.border="1px solid green";
    }
}
//
function checkEmail(input) {//Tester si l'email est valide :  javascript : valid email
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(input.value.trim().toLowerCase())) {
        showSuccess(input);
    } else {
        showError(input,`Email is not valid!`);
    }
}
///Tester si les champs ne sont pas vides
function checkRequired(inputArray) {
    inputArray.forEach(input => {
        if (input.value.trim() === '') {
            showError(input,`${getFieldName(input)} is required`);
        }else{
            showSuccess(input);
        }
    });
}
//Retour le nom de chaque input en se basant sur son id
function getFieldName(input) {
    return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}
//
function checkLength(input, min, max) {//Tester la longueur de la valeur  d'un input
    if(input.value.length < min){
        showError(input, `${getFieldName(input)} must be at least ${min} characters!`)
    }else if(input.value.length > max){
        showError(input, `${getFieldName(input)} must be less than ${max} characters !`);
    }else{
        showSuccess(input);
    }
}
//
function checkPasswordMatch(input1, input2) {
    if (input1.value !== input2.value) {
        showError(input2, 'Passwords do not match!');
    }
}





//Even listeners--------------------------------------------------------
form.addEventListener('submit',function(e){
    e.preventDefault();//Bloquer la soumission du formulaire
    

    //
    // checkLength(username, 3, 15);
    checkLength(password, 4, 25);
    checkEmail(username);
    checkRequired([username,password]);
    // checkPasswordMatch(password,password2);
    setTimeout(function(){
        e.target.submit();
       
    } ,4000)

    /*
    function isValidEmail(email) {//Tester si l'email est valide
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
    if (username.value === '') {
       showError(username,'Username is required!'); 
    }else{
        showSuccess(username);
    }

    if (email.value === '') {
       showError(email,'Email is required!'); 
    }else if(!isValidEmail(email.value)){
        showError(email,'Email is not valid!');
    }else{
        showSuccess(email);
    }

    if (password.value === '') {
       showError(password,'password is required!'); 
    }else{
        showSuccess(password);
    }

    if (password2.value === '') {
       showError(password2,'Password 2 is required!'); 
    }else{
        showSuccess(password2);
    }*/
});