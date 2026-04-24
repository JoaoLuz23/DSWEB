var divResposta = document.getElementById("resposta")
var inputNome = document.getElementById("nome")
var inputCategoria = document.getElementById("categoria_id")

document.addEventListener('DOMContentLoaded', () => {
    getCategorias();
    getItens();
});

document.getElementById('botaoEnviar').addEventListener('click', postItens)

async function getCategorias() {
    var requisicao = await fetch("http://localhost/meus-planos-api/categorias")
    var resposta = await requisicao.json()
    var select = document.getElementById("categoria_id")

    var dados = resposta.data ? resposta.data : resposta;
    select.innerHTML = '<option value="">Selecione uma categoria</option>'

    dados.forEach(cat => {
        const option = document.createElement('option')
        option.value = cat.id
        option.textContent = cat.nome
        select.appendChild(option)
    })
}

async function getItens() {
    var requisicao = await fetch("http://localhost/meus-planos-api/itens")
    var resposta = await requisicao.json()

    const linhas = resposta.data.map(item => {
      
        const isChecked = item.feito == 1 ? "checked" : "";
        
        return `
            <tr>
                <td><input type="checkbox" ${isChecked} onclick="toggleFeito(${item.id}, this.checked)"></td>
               
                <td>${item.nome}</td>
                <td>${item.categoria_nome}</td>
                <td><button onclick="deleteItens(${item.id})">Deletar</button></td>
            </tr>
        `;
    }).join("")
   
    divResposta.innerHTML = `
        <table class="sua-classe">
            <thead>
                <tr>
                    <th colspan="5"><center>Itens Cadastrados</center></th>
                </tr>
                <tr>
                    <th>Feito</th>
                
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                ${linhas}
            </tbody>
        </table>
    `
}

async function toggleFeito(id, marcado) {
    // Converte true/false para 1/0 para o PHP
    const valorFeito = marcado ? 1 : 0;

    await fetch(`http://localhost/meus-planos-api/itens/${id}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ feito: valorFeito })
    });
}

async function postItens() {
    var requisicao = await fetch("http://localhost/meus-planos-api/itens", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
            nome: inputNome.value,
            categoria_id: inputCategoria.value
        })
    })

    await requisicao.json()
    inputNome.value = ""
    inputCategoria.value = "" 
    getItens()
}

async function deleteItens(id) {
    await fetch("http://localhost/meus-planos-api/itens/" + id, { method: "DELETE" })
    getItens()
}