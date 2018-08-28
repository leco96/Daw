document.getElementById("enviar").onclick = checarPass;
document.getElementById("enviarFecha").onclick = calcularEdad;
document.getElementById("preguntas").onmouseover = cambiarLetra;
document.getElementById("preguntas").onmouseout = cambiarLetraInicial;
document.getElementById("enviar").onmouseover = informacionBasica;
document.getElementById("enviar").onmouseout = ocultarInfo;

var myVar = setInterval(setColor, 300);
var myanuncio = setTimeout(Anuncio,3000);


function Anuncio(){ alert("Bienvenido a la Tiendita de la Esquina!!!!");
            
            }

function setColor() {
  var x = document.getElementById("tienditaEsquina");
  x.style.backgroundColor = x.style.backgroundColor == "yellow" ? "pink" : "yellow";
}

function informacionBasica(){
    document.getElementById("enviarInfo").style.visibility="visible";
    
    document.getElementById("enviarInfo").innerHTML="<strong>recuerda que tiene que tener mayusculas, numeros y caracteres especiales para mayor seguridad</strong>"
}
function ocultarInfo(){
    document.getElementById("enviarInfo").style.visibility="hidden";
}

function cambiarLetra(){
    document.getElementById("preguntas").style.fontStyle="italic";
}
function cambiarLetraInicial(){
    document.getElementById("preguntas").style.fontStyle="normal";
}



function correct(){
     var x = document.getElementById("pass").value;
        let y="";
        var a=true;
        var b=false;
        var c=false;
         
         for(let i=0; i< x.length;i++){
             y=x.charCodeAt(i);
           if(a==true || y>=65&&y<=90){
                document.getElementById("demo").innerHTML = "contraseña Baja";
                a=true;
                if(b==true || y>=48&&y<=57 ){
                
                document.getElementById("demo").innerHTML = "contraseña Media";
                b=true;
                }
                if(c==true || y>=33&&y<=47 ){
                
                document.getElementById("demo").innerHTML = "contraseña Alta";
                c=true;
                }
            }
            else
               document.getElementById("demo").innerHTML = "Intenta no apta" ;
  
         }
    
    
    
}

function checarPass(){
     var x = document.getElementById("pass").value;
     var y = document.getElementById("checkpass").value;
        
    var  compare = x.localeCompare(y);
    
    if(compare==0)
       alert("iguales");
    else
        alert("No iguales");
}

function  calcular(){
    var x= document.getElementById("coca").value;
    var y= document.getElementById("gansito").value;
    var z= document.getElementById("chips").value;
    
    
   
    let precioCoca=15.5;
    var totalc=x*precioCoca;
    document.getElementById("calcularCoca").innerHTML = "Costo: " + totalc + " pesos" ;
    
    let precioG=10;
    var totalG=y*precioG;
    document.getElementById("calcularGansito").innerHTML = "Costo: " + totalG + " pesos" ;
   
    let precioC=17;
    var totalchips=z*precioC;
    document.getElementById("calcularChips").innerHTML = "Costo: " + totalchips + " pesos" ;
    
    return totalG+totalc+totalchips;
    
}

function calcularTotal(){
    let consumo = calcular();
    let iva = consumo*(.16);
    let total = iva+consumo;
    
    
   document.getElementById("total").innerHTML = "El precio total + IVA es de " + total + " pesos" ;
    
}

function calcularEdad(){
    let nacimiento = document.getElementById("fecha").value;
    var cumple= new Date(nacimiento);
    var hoy = new Date();
    var years = hoy.getFullYear() - cumple.getFullYear();
    
    cumple.setFullYear(hoy.getFullYear());
   
    if (hoy < cumple)
    {
    years--;
    }

    
   alert(years + " años");
    
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

