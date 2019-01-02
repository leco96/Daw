document.getElementById("enviar").onclick = checarPass;
document.getElementById("enviarFecha").onclick = calcularEdad;


function correct(){
     var x = document.getElementById("pass").value;
        let y="";
        var a=true;
        var b=false;
        var c=false;
         
         if(x != ""){
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
               document.getElementById("demo").innerHTML = "" ;
  
         }
     }
     else
        document.getElementById("demo").innerHTML = "" ;
    
    
}

function checarPass(){
     var x = document.getElementById("pass").value;
     var y = document.getElementById("checkpass").value;
        
    var  compare = x.localeCompare(y);
    
    if(compare!=0)
       document.getElementById("btndemo").innerHTML = 'Please  check your password';
    else
        document.getElementById("btndemo").innerHTML = ' <a id="enviar" href="#" class="btn btn-primary">Go</a>';
}


