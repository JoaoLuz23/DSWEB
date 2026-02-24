
//========================= EVENTOS DO MOUSE =========================


var area = document.getElementById("area");
var mensagem = document.getElementById("mensagem");

area.addEventListener("click", function () {
    mensagem.textContent = "Clique simples detectado!";
});


area.addEventListener("dblclick", function () {
    if (area.style.background == "purple") {
        area.style.background = "lightgray";
    } else {
        area.style.background = "purple";
    }
});

area.addEventListener("mouseenter", function () {
    mensagem.textContent = "O mouse entrou na área!";
});
area.addEventListener("mouseleave", function () {
    mensagem.textContent = "O mouse saiu da área!";
});

var posicao = document.getElementById("posicao");

area.addEventListener("mousemove", function (event) {
    posicao.textContent = "X:" + event.clientX + " Y:" + event.clientY;
});

area.addEventListener("contextmenu", function (event) {
    event.preventDefault();
    alert("Botão direito clicado!");
});

//========================= EVENTOS DE TECLADO =========================

document.addEventListener("keydown", function (event) {
    console.log("Tecla pressionada: " + event.key);
})
document.addEventListener("keypress", function (event) {
    console.log("Caractere digitado: " + event.key);
});
document.addEventListener("keyup", function (event) {
    console.log("Tecla liberada: " + event.key);
});

document.addEventListener("keydown", function (event) {

    var campo = document.getElementById("resultado");
    campo.textContent = "Tecla pressionada: " + event.keyCode;

    console.log("Tecla pressionada: " + event.key);
});




//========================= EVENTOS DE FORMULÁRIO =========================

var form = document.getElementById("meuFormulario");

form.addEventListener("submit", function (event) {
    event.preventDefault(); //Impede o comportamento padrãodo navegador
console.log("Formulário enviado!");
});

var nome = document.getElementById("nome");

nome.addEventListener("input", function(){
console.log("Digitando: " + nome.value);
});

nome.addEventListener("focus", function(){
nome.style.background = "#e0f7ff";
});

nome.addEventListener("blur", function(){
nome.style.background = "white";
});


//========================= EVENTOS DE JANELA =========================

window.addEventListener("load", function(){
console.log("Página totalmente carregada!");
});

window.addEventListener("scroll", function(){
console.log("Scroll atual: " + window.scrollY);
});

window.addEventListener("resize", function(){
console.log("Nova largura: " + window.innerWidth);
});
