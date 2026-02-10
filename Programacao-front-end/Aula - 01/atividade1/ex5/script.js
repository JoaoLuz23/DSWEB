let capitalinicial = parseFloat(prompt("Digite o capital inicial:"));
let tempomes = parseFloat(prompt("Digite o tempo em meses:"));
let taxajuros = parseFloat(prompt("Digite a taxa de juros mensal:"));

let montante = capitalinicial * (1 + (taxajuros / 100)) ** tempomes;
alert("O montante após " + tempomes + " meses é: " + montante.toFixed(2));


