<?php
    function envoi_email($mail,$objet,$nom,$numero,$message)
    {        
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {           
            $destinataire = 'yoyo12008@hotmail.com';
            // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
            $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
            $headers .= 'Reply-To: '.$mail."\n"; // Mail de reponse
            $headers .= 'From: '.$nom.'<'.$mail.'>'."\n"; // Expediteur
            $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
            $headers .= 'Cc: '.$mail."\n"; // Copie Cc              
            if (mail($destinataire, $objet, $message, $headers)) // Envoi du message
            {               
                include '../php/view/message_envoie_mail.php';                
            }
            else // Non envoyé
            {
                include '../php/view/message_erreur_envoie_mail.php';                
            }
        }       
    }
?>
    
   