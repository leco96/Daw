function ejercicioUno(){
    var numero = prompt("Escribe un numero: ");
        let t = '<table>' ;
        for(let i =1; i<= numero; i++){
            t =  t+ '<tr>';
            for(let j=0; j<3; j++){
                if(j==0)
                    t+='<td>'+i+'</td>';
                else if(j==1)
                    t+='<td>'+Math.pow(i,2)+'</td>';
                else
                    t+='<td>'+Math.pow(i,3)+'</td>';
            }
             t=t+'</tr>';
        }
        t+='</table>'; 
    
    document.write(t);
}

function ejercicioDos(){
    let x= Math.floor(Math.random()*100);
    let y= Math.floor(Math.random()*100);
    let tiempoI =  Date.now();
    let numero = prompt("Escribe el resultado de " + x + " y " + y);
    let resultado = x+y;
    let tiempoF =  Date.now();
    let tiempo = (tiempoF-tiempoI)/1000;
    if(numero==resultado)
        alert("corecto, tu tiempo fue: " + tiempo + "segundos");
    else
        alert("Lo siento, resultado incorecto. Tiempo: " + tiempo + "segundos");
}

function contador(nuemros){
    let numeros =[0,1,2,3,0,0,-1];
    let contadorCero=0;
    let contadorNegativos=0;
    let contadorPositivos=0;
    
    for(let i=0;i<numeros.length;i++){
        if(numeros[i]<0)
            contadorNegativos+=1;
        else if(numeros[i]==0)
            contadorPositivos+=1;
        else
            contadorCero+=1;        
    }
    let inicio = "el arrelgo es [0,1,2,3,0,0,-1]"
    let resultado = "Cantidad de positivos: " + contadorPositivos + " cantidad de negativos: " +contadorNegativos + " cantidad de ceros: " + contadorCero;
    alert(inicio);
    alert(resultado);
    
}

function promedios(){

let nuevoArray = new Array(2);
nuevoArray[0]=new Array(2);
nuevoArray[1]= new Array(2);
    //Metemos un dato en cada posición
nuevoArray[0][0] = 25;
nuevoArray[0][1] = 12;
nuevoArray[1][0] = 34;
nuevoArray[1][1] = 6;
    
 let promedio="";
 let matriz="";
    document.write("Promedios a calcular <br> ");
    //Bucle que recorre el primer array
    for(var i=0; i<nuevoArray.length; i++) {
    //Bucle que recorre el array que está en la posición i
    for(var j=0; j<nuevoArray[i].length; j++) {
        
       document.write(nuevoArray[i][j] + "  ");
       
    }
       document.write("<br>");              
}
    document.write("Resultado <br>");
    
    
     for(var i=0; i<nuevoArray.length; i++) {
    //Bucle que recorre el array que está en la posición i
    for(var j=0; j<nuevoArray[i].length; j++) {
        
       document.write(nuevoArray[i][j] +nuevoArray[i][j+1]);
       
    }
       document.write("<br>");              
}
   
    
    
}

function inverso(){
    let numero = prompt("Escribe el numero que se va a invertir: ");
    var numeroNuevo="";
    for(let i=numero.length-1;i>=0;i--)
        numeroNuevo+=numero.charAt(i); 
    
    alert(numeroNuevo);
}

function ejercicioSeis(){
  
    var person = {name: "juan", age: 40, altura:170, nacionalidad: "Mexicana"}
   alert(person.name + " Edad " + person.age +  " altura " + person.altura + " nacionalidad " + person.nacionalidad);
    
}

