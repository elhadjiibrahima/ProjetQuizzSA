const forme = document.getElementById('forme');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const login = document.getElementById('login');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const small_nom=document.getElementById("small_nom");
const small_prenom=document.getElementById("small_prenom");
const small_login=document.getElementById("small_login");
const small_password=document.getElementById("small_password");
const small_password2=document.getElementById("small_password2");



/////##########################################################

var inputnom=document.forms['forme']['nom'];
var inputprenom=document.forms['forme']['prenom'];
var inputlogin=document.forms['forme']['login'];
var inputpassword=document.forms['forme']['password'];
var inputpassword2=document.forms['forme']['password2'];



//Functions-------------------------------------------------------------
function showError(input, message) {//Afficher les messages d'erreur
    if(input==inputlogin){
        input.style.border="1px solid red";
        small_login.style.display="block";
        small_login.innerText=message;
    }
    if(input==inputpassword){
        input.style.border="1px solid red";
        small_password.style.display="block";
        small_password.innerText=message;
        message="mot de pass invalide"
    }
    if(input==inputpassword2){
        input.style.border="1px solid red";
        small_password2.style.display="block";
        small_password2.innerText=message;
        message="mot de pass invalide"
    }
    if(input==inputnom){
        input.style.border="1px solid red";
        small_nom.style.display="block";
        small_nom.innerText=message;
        message="mot de pass invalide"
    }
    if(input==inputprenom){
        input.style.border="1px solid red";
        small_prenom.style.display="block";
        small_prenom.innerText=message;
        message="mot de pass invalide"
    }
}
//
function showSuccess(input) {
    
    if(input==inputnom){
        input.style.border="1px solid green";
    }
    if(input==inputprenom){
        input.style.border="1px solid green";
    }
    if(input==inputlogin){
        input.style.border="1px solid green";
    }
    if(input==inputpassword){
        input.style.border="1px solid green";
    }
    if(input==inputpassword2){
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
forme.addEventListener('submit',function(e){
    e.preventDefault();//Bloquer la soumission du formulaire
    
    checkRequired([nom,prenom, login, password, password2]);
    //
    // checkLength(, 3, 15);
    checkLength(password, 6, 25);
    checkEmail(login);
    checkPasswordMatch(password,password2);

    
     setTimeout(function(){
        e.target.submit();  
    } ,1000)


    // const chooseAvatar=document.getElementById("a_vatar-ad figure");
    // const file=document.getElementById("file");
    // const btnlabel=document.getElementById("avatarr")
    // file.addEventListener("click",()=>{
    //     fileUpload.click();
    // })

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