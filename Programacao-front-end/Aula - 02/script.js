function somarNumeros(num1, num2) {
    return num1 + num2;
}


let resultado = somarNumeros(5, 10);
console.log(resultado);

resultado = somarNumeros(50,100);
console.log(resultado);

let dataAtual = new Date();
alert (dataAtual.toISOString());

let ano = dataAtual.getFullYear();
let mes = dataAtual.getMonth() + 1; 
let dia = dataAtual.getDate();
let hora = dataAtual.getHours();
let minuto = dataAtual.getMinutes();
let segundo = dataAtual.getSeconds();

console.log(`Data atual: ${dia}/${mes}/${ano} ${hora}:${minuto}:${segundo}`);


let hoje = new Date();
let DiasParaAdicionar = 7;


let novaData = new Date(hoje);
novaData.setDate(novaData.getDate() + DiasParaAdicionar);

console.log(novaData.toLocaleDateString());

document.getElementById("conteudo").innerHTML = "<p>Vai corinthians!</p>";

var valor = document.getElementById("conteudo").innerHTML;
console.log(valor);

document.getElementById("foto").setAttribute("src", "gavioes_da_fiel.jpg");

document.getElementById("foto").getAttribute("src"); 

document.getElementById("conteudo").style.backgroundColor = "yellow";


function mudaTamanho() {
    document.getElementById("foto").style.width = "1000px";
}