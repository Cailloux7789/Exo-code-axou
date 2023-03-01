let btn = document.querySelector("button")

btn.addEventListener('click', couleurbutton)

function couleurAleatoire() {

    let red = Math.floor(256*Math.random())
    let green = Math.floor(256*Math.random())
    let blue = Math.floor(256*Math.random())

    let text = `rgb(${red}, ${green}, ${blue})`

    return text }

function couleurbutton(){

    btn.style.setProperty("background-color", couleurAleatoire()) 
}