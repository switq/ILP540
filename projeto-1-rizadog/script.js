function clickMenu() {
    event.preventDefault()
    itens.style.display = 'block'
}

function closeMenu() {
    event.preventDefault()
    itemMenu()
}

function itemMenu() {
    itens.style.display = 'none'
}

function abreMapa() {
    event.preventDefault()
    mapa.style.display = "flex"

}

function fechaMapa() {
    event.preventDefault()
    mapa.style.display = "none"
}