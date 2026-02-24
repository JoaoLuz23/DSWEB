// ========================= EVENTOS DE TECLADO =========================

document.addEventListener("keydown", function (event) {

    var campo = document.getElementById("resultado");
    var imagem = document.getElementById("imagem");

    campo.textContent = "Tecla pressionada: " + event.key;

    // Letra A
    if (event.keyCode === 90 || event.key === 90) {
        imagem.src = "imagem.png";
        imagem.style.display = "block";
    }

    // Letra B
    else if (event.keyCode === 88 || event.key === 88) {
        imagem.src = "imagem2.jpg";
        imagem.style.display = "block";
    }

    else if (event.keyCode === 67 || event.key === 67) {
        imagem.src = "imagem3.jpg";
        imagem.style.display = "block";

    }

    else if (event.keyCode === 86 || event.key === 86) {
        imagem.src = "imagem4.jpg";
        imagem.style.display = "block";
    }
    


    // Outra tecla esconde a imagem
    else {
        
        imagem.style.display = "none";
    }
});

document.addEventListener("keydown", function (event) {

    var campo = document.getElementById("resultado");
    campo.textContent = "Tecla pressionada: " + event.keyCode;

    console.log("Tecla pressionada: " + event.key);
});
