<?php
    session_start();
    require_once("modeloRBAC.php");
    require_once("util.php");
    
    if (isset($_POST["inputUsuarioCasino"])) {
        $_POST["inputUsuarioCasino"] = limpia_entrada($_POST["inputUsuarioCasino"]);
    }
    
    if (isset($_POST["inputPasswordCasino"])) {
        $_POST["inputPasswordCasino"] = limpia_entrada($_POST["inputPasswordCasino"]);
    }

 
     if(isset($_SESSION["usuarioC"])){
        include("navBar.html");
         include("panelControl.php");
        include("footer.html");
    }else if (isset($_POST["inputUsuarioCasino"]) != "" && isset($_POST["inputPasswordCasino"]) != "") {
        if(login($_POST["inputUsuarioCasino"] ,$_POST["inputPasswordCasino"]) ){
            $_SESSION["usuarioC"] = $_POST["inputUsuarioCasino"];
            include("navBar.html");
            include("panelControl.php");
            include("footer.html");
        }
    }else if(isset($_POST["inputUsuarioCasino"]) == "" && isset($_POST["inputPasswordCasino"]) == "" && isset($_POST["inputUsuarioCasino"])  && isset($_POST["inputPasswordCasino"])){
        $errorCasino = "Usuario y/o password incorrectos";
        include("navBar.html");
        include("inicioRBAC.html");
        include("footer.html"); 
    } else if(isset($_POST["inputUsuarioCasino"]) || isset($_POST["inputPasswordCasino"]) ) {
        sleep(3);
        $errorCasino = "Usuario y/o password incorrectos";
        include("navBar.html");
        include("inicioRBAC.html");
        include("footer.html"); 
    } else{
        include("navBar.html");
        include("inicioRBAC.html");
        include("footer.html"); 
        
     }

  

        
 ?>    
