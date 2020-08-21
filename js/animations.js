window.onload = eliminarDivs;

function eliminarDivs() {
    document.getElementById("contentPrincipal").style.display = 'none';
    document.getElementById("contentSuplement").style.display = 'none';
    document.getElementById("professorat").style.transform = 'translatex(-1400px)';
}

document.getElementById("botoBlau").onclick = mostrarEsconder1;

var caja1 = document.getElementById("contentPrincipal");
var caja2 = document.getElementById("contentSuplement");

function mostrarEsconder1() {

    if (caja1.style.display == 'none') {
        document.getElementById("contentPrincipal").style.display = 'block';
        if (caja1.style.display == 'block') {
            document.getElementById("contentSuplement").style.display = 'none';
        } else {
            document.getElementById("contentPrincipal").style.display = 'block';
        }
    } else {
        document.getElementById("contentPrincipal").style.display = 'none';
    }
}

document.getElementById("botoVermell").onclick = mostrarEsconder2;

function mostrarEsconder2() {

    if (caja2.style.display == 'none') {
        document.getElementById("contentSuplement").style.display = 'block';
        if (caja2.style.display == 'block') {
            document.getElementById("contentPrincipal").style.display = 'none';
        } else {
            document.getElementById("contentSuplement").style.display = 'block';
        }

    } else {
        document.getElementById("contentSuplement").style.display = 'none';
    }
}

var imgs = new Array("img/virginia.jpg", "img/jona.jpg", "img/jordi.jpg", "img/ibon.jpg", "img/aroon.jpg");

var event = document.getElementById("fotosCompanys").onmouseout = rotarImagen;
event = setInterval(rotarImagen, 1000);

function rotarImagen() {
    var index = Math.floor((Math.random() * imgs.length));
    document.getElementById("fotosCompanys").src = imgs[index];
}

function myFunction(x) {
    if (x.matches) { // If media query matches
        onscroll = function ()  {
            if (this.scrollY >= 750){
            document.getElementById("professorat").style.transition = 'all 1.2s linear';
            document.getElementById("professorat").style.transform = 'translatex(0)';
            }    
            return false;    
        }
    } else {
        onscroll = function ()  {
            if (this.scrollY >= 1200){
            document.getElementById("professorat").style.transition = 'all 1.2s linear';
            document.getElementById("professorat").style.transform = 'translatex(0)';
            }    
            return false;    
        }
    }
  }
  
  var x = window.matchMedia("(max-width: 480px)")
  myFunction(x) 
  x.addListener(myFunction) 

 