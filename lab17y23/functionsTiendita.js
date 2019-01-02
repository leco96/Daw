
function  calcular(){
    var x= document.getElementById("coca").value;
    var y= document.getElementById("gansito").value;
    var z= document.getElementById("chips").value;
    
    console.log("entro en calcular");
   
    let precioCoca=100;
    var totalc=x*precioCoca;
    document.getElementById("calcularCoca").innerHTML = "Costo: " + totalc + " pesos" ;
    
    let precioG=100;
    var totalG=y*precioG;
    document.getElementById("calcularGansito").innerHTML = "Costo: " + totalG + " pesos" ;
   
    let precioC=100;
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