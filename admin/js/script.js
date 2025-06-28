const formulario_login = document.querySelector(".formulario_login");
const formulario_Registro = document.querySelector(".formulario_Registro");
const principal = document.querySelector(".principal");
const titulo_login = document.querySelector(".titulo_login");
const titulo_registro = document.querySelector(".titulo_registro");

const btn_salvar = document.querySelector("#btn_salvar");
const btn_cadastro = document.querySelector("#btn_cadastro");





function funcaologin(){
    formulario_login.style.left = "50%";
    formulario_login.style.opacity = 1;
    formulario_Registro.style.left = "150%";
    formulario_Registro.style.opacity = 0;
    principal.style.height = "500px";
    titulo_login.style.top = "50%";
    titulo_login.style.opacity = 1;
    titulo_registro.style.top = "50px";
    titulo_registro.style.opacity = 0;
}

function funcaoregistro(){
    formulario_login.style.left = "-50%";
    formulario_login.style.opacity = 0;
    formulario_Registro.style.left = "50%";
    formulario_Registro.style.opacity = 1;
    principal.style.height = "580px";
    titulo_login.style.top = "-60px";
    titulo_login.style.opacity = 0;
    titulo_registro.style.top = "50%";
    titulo_registro.style.opacity = 1;
}