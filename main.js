let docTitle= document.title
window.addEventListener("blur", () => {
    document.title = "Comeback to me :("
})

window.addEventListener("focus", () => {
    document.title = docTitle
})