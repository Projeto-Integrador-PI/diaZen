function selectEmotion(emotion, label) {
    event.preventDefault()
    document.getElementById("feeling").value = emotion;
    alert(`Você selecionou o sentimento: ${label}!`)
}
