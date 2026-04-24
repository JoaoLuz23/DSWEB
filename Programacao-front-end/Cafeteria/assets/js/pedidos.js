
var divResposta = document.getElementById("resposta")

var inputId  = document.getElementById("id")
var inputCliente   = document.getElementById("cliente")
var inputTotal   = document.getElementById("total")
var inputData   = document.getElementById("criado_em")


document.addEventListener('DOMContentLoaded', getPedidos)
document.getElementById('botaoEnviar').addEventListener('click', postPedidos)

async function getPedidos() {
    var requisicao = await fetch("http://localhost/cafeteria-api/pedidos")
    var resposta = await requisicao.json()

    console.log(resposta)
    console.log(inputTotal)
console.log(inputData)

    
    const linhas = resposta.data.map(item => `
        <tr>    
            <td>${item.id}</td>
            <td>${item.cliente}</td>
            <td>${item.total}</td>
            <td>${item.criado_em}</td>
            <td><button onclick="deletePedidos(${item.id})">Deletar</button></td>
            <td><button onclick="window.location.href='detalhes_pedido.html?id=${item.id}'">Detalhes</button></td>
        </tr>
    `).join("");
   
    console.log(linhas)
    divResposta.innerHTML = `
        <table class="sua-classe">
            <thead>
                <tr>
                    <th colspan="3" ><center>Produtos Cadastrados</center></th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                ${linhas}
            </tbody>
        </table>
    `;
}



async function postPedidos() {
    var requisicao = await fetch("http://localhost/cafeteria-api/pedidos", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            cliente: inputCliente.value
        })
    });

    var resposta = await requisicao.json();
    console.log(resposta);

    inputCliente.value = "";

    getPedidos();
}


async function deletePedidos(id) {
    var requisicao = await fetch("http://localhost/cafeteria-api/pedidos/" + id, {
        method: "DELETE"
    })
 
    var resposta = await requisicao.json()
    console.log(resposta)
 
    getPedidos()
}