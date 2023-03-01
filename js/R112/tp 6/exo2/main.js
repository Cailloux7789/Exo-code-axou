let btn = document.querySelector("button")

btn.addEventListener('click', enlevercache)

function enlevercache() {
    let span = document.querySelector("span")
    span.classList.remove("cache")
}