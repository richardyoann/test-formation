<?php   
    include"PHP/envoi_mail.php";     
    if (!empty($_POST["envoie_message"]))
    {
        envoi_email(stripslashes($_POST["email"]),stripslashes($_POST["objet"]),stripslashes($_POST["nom"]),stripslashes($_POST["telephone"]),stripslashes($_POST["message"]));           
    }

?>