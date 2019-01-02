 <?php
    session_start();
    require_once("util.php");
 
    if (isset($_POST["inputUsuario"])) {
        $_POST["inputUsuario"] = limpia_entrada($_POST["inputUsuario"]);
    }
    
    if (isset($_POST["inputPassword"])) {
        $_POST["inputPassword"] = limpia_entrada($_POST["inputPassword"]);
    }

    if (isset($_POST["passReg"])) {
        $_POST["passReg"] = limpia_entrada($_POST["passReg"]);
    }
    
    if (isset($_POST["checkpass"])) {
        $_POST["checkpass"] = limpia_entrada($_POST["checkpass"]);
    }
    
    if(isset($_SESSION["usuario"])){
        include("navBar.html");
        include("perfilfaceSign.html");
        include("footer.html");
    }else if(isset($_SESSION["usuarioReg"])){
        include("navBar.html");
        include("perfilfaceSign.html");
        include("footer.html");
    }else if (isset($_POST["inputUsuario"]) == "a01206220@itesm.mx" && $_POST["inputPassword"] == "daw2018") {
        $_SESSION["usuario"] = "Quique Oliveros";
        include("navBar.html");
        include("perfilfaceSign.html");
        include("footer.html");
    }else if ((isset($_POST["passReg"]) !="" || isset($_POST["checkpass"]) != "") && $_POST["passReg"] == $_POST["checkpass"]) {
        $_SESSION["usuarioReg"] = $_POST["usuarioReg"];
        include("navBar.html");
        include("perfilfaceSign.html");
        include("footer.html");
    } else if(isset($_POST["inputUsuario"]) || isset($_POST["inputPassword"]) ) {
        sleep(3);
        $error = "Usuario y/o password incorrectos";
        include("navBar.html");
        include("lab11n.html");
        include("footer.html"); 
    }else if(isset($_POST["passReg"])  ||  isset($_POST["checkpass"]) ){
        sleep(3);
        $errorP = "Check passwords";
        include("navBar.html");
        include("lab11n.html");
        include("footer.html"); 
    } else if( isset($_POST["passReg"]) != isset($_POST["checkpass"]) ) {
        sleep(3);
        $errorP = "Check passwords2";
        include("navBar.html");
        include("lab11n.html");
        include("footer.html"); 
    }else{
        include("navBar.html");
        include("lab11n.html");
        include("footer.html"); 
     }
     
        include("formatUpload_modal.html");
 ?>    
