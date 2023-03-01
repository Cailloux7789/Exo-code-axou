function couleurAleatoire() {

    let red = Math.floor(256*Math.random())
    let green = Math.floor(256*Math.random())
    let blue = Math.floor(256*Math.random())

    let text = `rgb(${red}, ${green}, ${blue})`

    return text
}
    
alert (couleurAleatoire())
alert (couleurAleatoire())
alert (couleurAleatoire())