<?php 

    function sanitizeFormUserName($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);        
        return $inputText;
    }

    function sanitizeFormName($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    function validateUserName($name){

    }

    function validateFirstName($firstName){
        
    }

    function validateLastName($lastName){
        
    }

    function validatePasswords($password, $confirmPassword){
        
    }

    function validateEmails($email, $confirmEmail){
        
    }
   

    //Register Button
    if(isset($_POST['registerButton'])){
        // echo "Register button is pressed";
        $userName = sanitizeFormUserName($_POST['userName']);
        $firstName = sanitizeFormName($_POST['firstName']);
        $lastName = sanitizeFormName($_POST['lastName']);
        $email = sanitizeFormUserName($_POST['email']);        
        $confirmEmail = sanitizeFormUserName($_POST['confirmEmail']);        
        $password = sanitizeFormPassword($_POST['password']);       
        $confirmPassword = sanitizeFormPassword($_POST['confirmPassword']);
        

        validateUserName($userName);
        validateFirstName($firstName);
        validateLastName($lastName);
        validateEmails($email, $confirmEmail);
        validatePasswords($password, $confirmPassword);


    }
?>
