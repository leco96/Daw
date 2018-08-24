document.getElementById("enviar").onclick = checarPass;

function correct(){
     var x = document.getElementById("pass").value;
        let y="";
        let z=0;
         for(let i=0; i< x.length;i++){
             y=x.charAt(i);
            if(z==1 || y==y.toUpperCase()){
                document.getElementById("demo").innerHTML = "contraseña FUERTE";
                z=1;
            }
            else
               document.getElementById("demo").innerHTML = "contraseña DEBIL" ;
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