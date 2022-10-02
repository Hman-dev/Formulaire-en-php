<?php

//var_dump($_POST['theme'])."<br><br>";
//var_dump($_POST);


if(isset($_POST['user_name'])
&& isset($_POST['user_firstname']) 
&& isset($_POST['user_email']) 
&& isset($_POST['phone'])
&& isset($_POST['theme']) 
&&isset($_POST['user_message'])
)
{
   
    $lastname = htmlspecialchars($_POST['user_name']);
    $firstname = htmlspecialchars($_POST['user_firstname']);
    $email = filter_var(($_POST['user_email']), FILTER_VALIDATE_EMAIL);
    $phone = htmlspecialchars($_POST['phone']);
    $sujet= $_POST['theme'];
    $message = htmlspecialchars($_POST['user_message']);

    echo 'Merci ' ."<strong>$firstname</strong>".' '."<strong>$lastname</strong>".' '.'de nous avoir contacté à propos de '.'"'.$sujet.'"<br>';
    echo "<p>Un de nos conseiller vous contactera soit à l’adresse <strong>$email</strong> ou par téléphone au <strong>$phone</strong> 
    dans les plus<br>brefs délais pour traiter votre demande :<br><br>
    $message</p>";
    

}


?>