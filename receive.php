
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["client_name"];
    $type = $_POST["client_type"];
    $mail = $_POST["client_mail"];
    $fisrtname = $_POST["client_firstname"];
    if(empty($name)){
        echo "Vous n'avez pas rensigné votre nom.";
    }
    elseif(empty($firstname)){
        echo "Vous n'avez pas rensigné votre prénom.";
    }
    else{
        echo "Bonjour $fisrtname $name !";
    }
}

?>