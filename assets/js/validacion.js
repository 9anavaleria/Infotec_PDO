// Declaracion de variables
var textoInput, numeroInput, emailInput, passwordInput;
// Asignacion de variables cuando toda la pagina este cargada
window.onload = function(){
    // Asignacion de variables 
    textoInput = document.getElementsByClassName("texto");
    numeroInput = document.getElementsByClassName("numero");
    emailInput = document.getElementsByClassName("email");
    passwordInput = document.getElementsByClassName("password");
    // Recoger los eventos 
    textoInput.addEventListener('input', createListener(isValidText));
    numeroInput.addEventListener("input", createListener(isValidNum));
    emailInput.addEventListener("input", createListener(isValidEmail));
    passwordInput.addEventListener("input", createListener(isValidPass));
    
};
// Funciones de validacion
function isValidText(texto){
    return /^[A-Za-z]+$/.test(texto);
}
function isValidNum(numero){
    return /^\d+$/.test(numero);
}
function isValidEmail(email){
    return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email);
}
function isValidPass (password){
    return /^(?=.*\d).{8,}$/.test(password);
}

function createListener(validator){
    return e =>{
        const input = e.target;
        const text = e.target.value;
        const valid = validator(text);
        const showTip = text !== "" && !valid;
        const toolip = e.target.nextElementSibkling;
        showOrHideTip(showTip, toolip, input)
    };
}
function showOrHideTip(show, element, input){
    if (show){
        input.style.borderBottom = "2px solid red";
        element.style.visibility = "visible";
    }
    else {
        input.style.borderBottom = "2px solid #00bfb2";
        element.style.visibility = "hidden";
    }
}