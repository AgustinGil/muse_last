corazones = document.getElementsByClassName('corazon')
corazon = corazones[0]
corazon.onmouseover = function mouse(){
    if(!corazon.classList.contains('corazon-activo')){
        corazon.src = "assets/img/icons/heart-solid.svg"
    }
}
corazon.onmouseleave = function mouse(){
    if(!corazon.classList.contains('corazon-activo')){
        corazon.src = "assets/img/icons/heart-regular.svg"
    }
}

$('.corazon').on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
    $(this).removeClass("corazon-unclick");
    $(this).removeClass("corazon-click");
});

corazon.onclick = function diablo(){
    if(document.querySelector('#header__usuario')) {
        var e = document.getElementById("youtube-audio").dataset.video
        $.ajax({
            method: "POST",
            url: "config/favoritos.php",
            data: {id_video: e}
        })
        if(!corazon.classList.contains('corazon-activo')){
            $(".corazon").addClass("corazon-click");
            $(".corazon").addClass("corazon-activo");
            corazon.src = "assets/img/icons/heart-solid (1).svg"
        }else{
            $(".corazon").addClass("corazon-unclick");
            $(".corazon").removeClass("corazon-activo");
            corazon.src = "assets/img/icons/heart-solid.svg"
        }
    } else {
        alerta_favoritos()
    }
}


var elementoLista = document.createElement("li")
elementoLista.classList.add("splide__slide")
elementoLista.classList.add("seccion-musica")
elementoLista.style.marginRight = '1rem'

var infoMusic = document.createElement("div")
infoMusic.classList.add("seccion-titular__info--music")

var infoImg = document.createElement("div")
infoImg.classList.add("seccion-titular__info--img")

var imgCancion = document.createElement("img")
imgCancion.classList.add("imagen")
imgCancion.src = ""

var imgSobreCancion = document.createElement("img")
imgSobreCancion.classList.add("reproducir-sobre-imagen")
imgSobreCancion.src = "assets/img/icons/play-button.svg"

var infoTexto = document.createElement("div")
infoTexto.classList.add("seccion-titular__info--text")

var tituloCancion = document.createElement("a")
tituloCancion.classList.add("seccion-titular__info--titulo")

var artistaCancion = document.createElement("a")
artistaCancion.classList.add("seccion-titular__info--artista")

infoImg.appendChild(imgCancion)
infoImg.appendChild(imgSobreCancion)
infoTexto.appendChild(tituloCancion)
infoTexto.appendChild(artistaCancion)
infoMusic.appendChild(infoImg)
infoMusic.appendChild(infoTexto)
elementoLista.appendChild(infoMusic)

function cambiarSeccionBiblioteca(n){
    itemsHeader = document.getElementsByClassName('header-inferior__item')
    itemsHeader[0].classList.remove('header__menu-central__item--activo')
    itemsHeader[1].classList.remove('header__menu-central__item--activo')
    itemsHeader[n].classList.add('header__menu-central__item--activo')

    contenedorBusqueda = document.getElementById('seccion-resultado-biblioteca')
    while (contenedorBusqueda.lastElementChild) {
        contenedorBusqueda.removeChild(contenedorBusqueda.lastElementChild);
    }

    if(n == 1){
        $.ajax({
            method: "POST",
            url: "config/historial_usuario.php",
            success: function (response) {
                crearCanciones(JSON.parse(response))
                asignarReproductor()
            }
        })
    }else{
        $.ajax({
            method: "POST",
            url: "config/favoritos_usuario.php",
            success: function (response) {
                crearCanciones(JSON.parse(response))
                asignarReproductor()
            }
        })
    }
}


function crearCanciones(arregloCanciones){
    for (i = 0; i < arregloCanciones.length; i++){
        crearCancion(arregloCanciones[i])
    }
}


function crearCancion(cancion){
    nuevoContenido = cancion
    nuevoElementoLista = elementoLista.cloneNode(true)
    nuevoElementoLista.childNodes[0].childNodes[0].childNodes[0].src = nuevoContenido.imagen
    nuevoElementoLista.childNodes[0].childNodes[0].childNodes[0].onerror = function() {
        this.onerror=null,
        this.src = "assets/img/icons/isotipo-blanco.svg"
    }
    
    titulo = nuevoContenido.titulo.split(' - ').pop()
    nuevoElementoLista.childNodes[0].childNodes[1].childNodes[0].innerHTML = titulo

    nuevoElementoLista.setAttribute('idVideo',nuevoContenido.id_video)
    nuevoElementoLista.setAttribute('imgUrl',nuevoContenido.imagen)
    nuevoElementoLista.setAttribute('nCancion',nuevoContenido.titulo)
    nuevoElementoLista.setAttribute('nArtista',nuevoContenido.nombre)
    nuevoElementoLista.childNodes[0].childNodes[1].childNodes[1].innerHTML = nuevoContenido.nombre
    contenedorBusqueda = document.getElementById('seccion-resultado-biblioteca')
    contenedorBusqueda.prepend(nuevoElementoLista)
}
        

$.ajax({
    method: "POST",
    url: "config/favoritos_usuario.php",
    success: function (response) {
        crearCanciones(JSON.parse(response))
        asignarReproductor()
    }
})