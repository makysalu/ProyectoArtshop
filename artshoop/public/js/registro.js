init();

function init() {
    var opcion=0;
    
    if(opcion==0){
        pintaropciones();
    }
}
function pintaropciones(){
    let htmlAPintar = '';
    htmlAPintar+="<section id='registro'>";
    htmlAPintar+="<header>Elige tu Perfil</header>";
    htmlAPintar+="<section>";
    htmlAPintar+="<article class='opcionRegistro'>";
    htmlAPintar+="<p><h1>Usuario</h1>Soy un Amante del arte, estoy interesado en comprar y disfrutar del arte.</p>";
    htmlAPintar+="<div><span>ELIGE ESTA OPCION</span></div>";
    htmlAPintar+="</article>";
    htmlAPintar+="<article class='opcionRegistro'>";
    htmlAPintar+="<p><h1>Artista</h1>Soy artista, estoy interesado en exponer y/o vender arte a través de Artshop.</p>";
    htmlAPintar+="<div><span>ELIGE ESTA OPCION</span></div>";
    htmlAPintar+="</article>";
    htmlAPintar+="</section>";
    htmlAPintar+="</section>";
    console.log(htmlAPintar);
    
    //document.body.innerHTML=htmlAPintar;
    document.write(htmlAPintar);
    
}