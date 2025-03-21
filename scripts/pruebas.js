document.getElementById("javatest").innerHTML = "Esto está modificado por medio de Javascript en una hoja externa";
//window.location.href = "https:carlos.sanchezdonate.com"; // Lo veo como una mala práctica por el hecho de que Google va a tener que leer la página dos veces lo que genera un tiempo más lento, a parte de eso, Google puede fallar a la hora de leer el JS. Si tu navegador no soporta JS o lo tienes desactivado entonces no serás redirigido.

//Advent listener para un enlace ofuscado
const element = document.getElementById("ofc");
element.addEventListener("click", myFunction);

function myFunction() {
    location.href = "https://carlos.sanchezdonate.com";
}

