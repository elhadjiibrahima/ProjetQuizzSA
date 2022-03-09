const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom=document.getElementById("prenom")
const email = document.getElementById('login');
const password = document.getElementById('password1');
const password2 = document.getElementById('password2');

//Functions-------------------------------------------------------------
form.addEventListener(submit ,(e)=>{
    e.preventDefault();


    chechkInput();
})

function chechkInput(){
    const nomValue =nom.value.trim();
    const prenomValue =prenom.value.trim();
    const emailValue =email.value.trim();
    const passwordValue =password.value.trim();
    const password2Value =password2.value.trim();




}

function setErrorFor(input,message='invalid'){
    const formControl = input.parentElement;
    const small=formControl.querySelector("small");
    small.innerText=message;
    formControl.className='form control error'
}