
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

// Adicionar eventos de clique aos botões
btnConfig.addEventListener("click", function () {

// Redirecionar para a página de configurações
window.location.href = "configuracoes.html";
});

btnHome.addEventListener("click", function () {
// Redirecionar para a página inicial
window.location.href = "pagina_home.html";
});
btnCalendario.addEventListener("click", function () {
// Redirecionar para a página do calendário
window.location.href = "pagina_calendario.html";

});
