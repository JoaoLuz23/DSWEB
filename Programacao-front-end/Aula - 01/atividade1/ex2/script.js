let numero1 = parseFloat(prompt("Digite o primeiro número:"));
let numero2 = parseFloat(prompt("Digite o segundo número:"));

let soma = numero1 + numero2;
alert("A soma dos números é: " + soma);

let numero3 = parseFloat(prompt("Digite o primeiro número:"));
let numero4 = parseFloat(prompt("Digite o segundo número:"));

let multiplicacao = numero3 * numero4;
alert("A multiplicação dos números é: " + multiplicacao);

let numero5 = parseFloat(prompt("Digite o primeiro número:"));
let numero6 = parseFloat(prompt("Digite o segundo número:"));

let subtracao = numero5 - numero6;
alert("A subtração dos números é: " + subtracao);

let numero7 = parseFloat(prompt("Digite o primeiro número:"));
let numero8 = parseFloat(prompt("Digite o segundo número:"));

let divisao = numero7 / numero8;
if (numero8 === 0) {
    alert("Erro: Divisão por zero não é permitida.");
} else {
    alert("A divisão dos números é: " + divisao);
}

