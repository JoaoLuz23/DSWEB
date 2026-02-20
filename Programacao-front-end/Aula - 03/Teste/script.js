var contadorItem = 0


function add(){

contadorItem ++ //incrementa o contador de item


let novoItem = document.createElement('li');//crio o item
let novaTarefa//adiciono texto ao item
novoItem.setAttribute("id", contadorItem) // Atributo de Id

let botaoRemover = document.createElement('button');
botaoRemover.textContent = "Remover";
botaoRemover.setAttribute("onclick", "remove(" + contadorItem + ")") // Atributo de onclick para remover o item;

novoItem.appendChild(botaoRemover);
document.getElementById("lista").appendChild(novoItem);
}

function remove(itemLista){
var item = document.getElementById(itemLista);
document.getElementById("lista").removeChild(item); 
}   