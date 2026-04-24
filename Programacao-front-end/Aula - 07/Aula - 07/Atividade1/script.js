const form = document.getElementById("formulario");

function validarCPF(cpf) {

    cpf = cpf.replace(/\D/g, "");

    if (cpf.length !== 11) return false;

    if (/^(\d)\1+$/.test(cpf)) return false;

    let soma = 0;
    let resto;

    for (let i = 1; i <= 9; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }

    resto = (soma * 10) % 11;

    if (resto === 10 || resto === 11) resto = 0;

    if (resto !== parseInt(cpf.substring(9, 10))) return false;

    soma = 0;

    for (let i = 1; i <= 10; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }

    resto = (soma * 10) % 11;

    if (resto === 10 || resto === 11) resto = 0;

    return resto === parseInt(cpf.substring(10, 11));
}

form.addEventListener("submit", function (event) {

    event.preventDefault();

    let valido = true;

    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const senha = document.getElementById("senha").value;
    const confirmaSenha = document.getElementById("confirma-senha").value;
    const cpf = document.getElementById("cpf").value.trim();
    const telefone = document.getElementById("telefone").value.trim();
    const cep = document.getElementById("cep").value.trim();
    const data = document.getElementById("data-nascimento").value;
    const valor = document.getElementById("valor").value;
    const url = document.getElementById("url").value.trim();
    const cartao = document.getElementById("cartao").value.trim();

    document.querySelectorAll("span").forEach(span => span.textContent = "");

    if (nome.length < 3) {
        document.getElementById("erro-nome").textContent = "Nome deve ter pelo menos 3 caracteres";
        valido = false;
    }

    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regexEmail.test(email)) {
        document.getElementById("erro-email").textContent = "E-mail inválido";
        valido = false;
    }

    const regexSenha = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&._]).{8,}$/;

    if (!regexSenha.test(senha)) {
        document.getElementById("erro-senha").textContent =
        "A senha deve ter 8 caracteres, letra maiúscula, minúscula, número e símbolo";
        valido = false;
    }

    if (senha !== confirmaSenha) {
        document.getElementById("erro-senha").textContent =
        "As senhas não coincidem";
        valido = false;
    }

    const regexCpf = /^\d{3}\.\d{3}\.\d{3}-\d{2}$/;

    if (!regexCpf.test(cpf) || !validarCPF(cpf)) {
        document.getElementById("erro-cpf").textContent =
        "CPF inválido";
        valido = false;
    }

    const regexTelefone = /^\(\d{2}\)\s\d{4,5}-\d{4}$/;

    if (!regexTelefone.test(telefone)) {
        document.getElementById("erro-telefone").textContent =
        "Telefone inválido";
        valido = false;
    }

    const regexCep = /^\d{5}-\d{3}$/;

    if (!regexCep.test(cep)) {
        document.getElementById("erro-cep").textContent =
        "CEP inválido";
        valido = false;
    }

    if (!data) {

    document.getElementById("erro-data-nascimento").textContent =
    "Informe a data";
    valido = false;

} else {

    const dataNascimento = new Date(data);
    const dataMin = new Date("1920-01-01"); 
    const dataMax = new Date("2026-12-31");

    if (dataNascimento < dataMin || dataNascimento > dataMax) {
        document.getElementById("erro-data-nascimento").textContent =
        "A data deve estar entre 1920 e 2026";
        valido = false;
    }

}


    if (valor >= 10000) {
        document.getElementById("erro-valor").textContent =
        "O valor deve ser menor que 10.000";
        valido = false;
    }

    try {
        new URL(url);
    } catch {
        document.getElementById("erro-url").textContent =
        "URL inválida";
        valido = false;
    }

    const regexCartao = /^\d{4}\s\d{4}\s\d{4}\s\d{4}$/;

    if (!regexCartao.test(cartao)) {
        document.getElementById("erro-cartao").textContent =
        "Cartão inválido";
        valido = false;
    }

    if (valido) {

        document.getElementById("resultado").textContent =
        "Formulário enviado com sucesso.";

        window.location.href = "https://www.youtube.com/watch?v=dQw4w9WgXcQ&list=RDdQw4w9WgXcQ&start_radio=1";

    }

});
