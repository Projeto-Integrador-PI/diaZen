
document.addEventListener("DOMContentLoaded", function () {
    // Array com os nomes dos meses
    const meses = [
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    // Selecione o elemento do botão do mês
    const botaoMes = document.getElementById("mesAtual");

    // Obtenha a data atual
    const dataAtual = new Date();

    // Obtenha o mês da data atual (0-11)
    const mes = dataAtual.getMonth();

    // Atualize o texto do botão do mês com o mês atual
    botaoMes.querySelector("span").textContent = meses[mes];
});
