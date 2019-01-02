function getRequestObject() {
  // Asynchronous objec created, handles browser DOM differences

  if(window.XMLHttpRequest) {
    // Mozilla, Opera, Safari, Chrome, IE 7+
    return (new XMLHttpRequest());
  }
  else if (window.ActiveXObject) {
    // IE 6-
    return (new ActiveXObject("Microsoft.XMLHTTP"));
  } else {
    // Non AJAX browsers
    return(null);
  }
}

function sendRequest(){

    $jquery = 1;
    if ($jquery == 1) {
        
        $.get("controller.php", { pattern: document.getElementById('InputVendedor').value })
            .done(function( data ) {
                var ajaxResponse = document.getElementById('ajaxResponse');
                ajaxResponse.innerHTML = data;
                ajaxResponse.style.visibility = "visible";
         });
         
    } else {
       request=getRequestObject();
       if(request!=null)
       {
         var userInput = document.getElementById('InputVendedor');
         var url='controller.php?pattern='+userInput.value;
         request.open('GET',url,true);
         request.onreadystatechange = 
                function() { 
                    if((request.readyState==4)){
                        // Asynchronous response has arrived
                        var ajaxResponse=document.getElementById('ajaxResponse');
                        ajaxResponse.innerHTML=request.responseText;
                        ajaxResponse.style.visibility="visible";
                    }     
                };
         request.send(null);
       }
    }
}



function selectValue() {

   var list=document.getElementById("list");
   var userInput=document.getElementById("InputVendedor");
   var ajaxResponse=document.getElementById('ajaxResponse');
   userInput.value=list.options[list.selectedIndex].text;
   ajaxResponse.style.visibility="hidden";
   userInput.focus();
}



function sendRequest2(){

    $jquery = 1;
    if ($jquery == 1) {
        
        $.get("controller2.php", { pattern: document.getElementById('InputCliente').value })
            .done(function( data ) {
                var ajaxResponse = document.getElementById('ajaxResponse2');
                ajaxResponse.innerHTML = data;
                ajaxResponse.style.visibility = "visible";
         });
         
    } else {
       request=getRequestObject();
       if(request!=null)
       {
         var userInput = document.getElementById('InputCliente');
         var url='controller2.php?pattern='+userInput.value;
         request.open('GET',url,true);
         request.onreadystatechange = 
                function() { 
                    if((request.readyState==4)){
                        // Asynchronous response has arrived
                        var ajaxResponse=document.getElementById('ajaxResponse2');
                        ajaxResponse.innerHTML=request.responseText;
                        ajaxResponse.style.visibility="visible";
                    }     
                };
         request.send(null);
       }
    }
}



function selectValue2(){

   var list=document.getElementById("list");
   var userInput=document.getElementById("InputCliente");
   var ajaxResponse=document.getElementById('ajaxResponse2');
   userInput.value=list.options[list.selectedIndex].text;
   ajaxResponse.style.visibility="hidden";
   userInput.focus();
}