var opcionregistro=0;
console.log(opcionregistro);
function comprobarRegistro(form){
    errores=comprobarCampos(form);
    if(errores.length==0){
        estado=comprobarContraseña();
        return true;
    }
    else{
        return false;
    } 
}

function comprobarCampos(form) {
    var errores = new Array;
    for (let cont = 0; cont < document.getElementById(form).elements.length-1; cont++) {
        let input = document.getElementById(form).elements[cont];
        let valorinput=document.getElementById(input.id).value;
        if(valorinput.length==0){
            errores.push(input.id);
        }
    }
    return errores;
}

function comprobarContraseña() {
    var password=document.getElementById("Password").value;
    var password2=document.getElementById("Password2").value;
    if (password==password2) {
        return true;
    }
    else{
        alert("Las contraseñas no coinciden");
        return false; 
    }
}