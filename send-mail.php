<?php

    // Email send button has been pressed...
    if(isset($_POST['send']))
    {

        //$email = HIER MOET EMAIL ADRES VAN GEBRUIKER
        $subject = $_POST['Subject'];
        $message = $_POST['Message'];

        // Check for empty input fiels.
        if (empty($subject) || empty($message))
        {
            // One or more fields are empty
            header("Location: contact-gast.php?Empty-Fields");
        }

        // Validate Email
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            // Email is not valid
            header("Location: contact-gast.php?Invalid-Email");
        }
        
        else 
        {    
            $mailto = "info@ritsema-banck.com";
            $headers = "From: ".$email." | Subject: ".$subject;
            $txt = "You received an e-mail from ".$email."\n\n".$message;
            
            mail($mailto, $subject, $txt, $headers);
            header("Location: contact-gast.php?Email-Send");
        }
    }

    ?>