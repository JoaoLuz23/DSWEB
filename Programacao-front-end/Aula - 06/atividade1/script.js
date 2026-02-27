var quadrado = document.getElementById("quadrado");
var botao = document.getElementById("botao-preto");

document.addEventListener("mousemove", function(event){

    quadrado.style.left = (event.clientX - 10) + "px";
    quadrado.style.top = (event.clientY - 10) + "px";

});


function irParaLink() {
    window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ&list=RDdQw4w9WgXcQ&start_radio=1";
}
