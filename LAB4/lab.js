
function ejercicioUno(){
    let numero = prompt("Escribe un numero: ");
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
        alert("corecto, tu tiempo fue: " + tiempo);
    else
        alert("Lo siento, resultado incorecto. Tiempo: " + tiempo);
}
