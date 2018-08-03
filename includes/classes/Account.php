<?php 
    class Account{
            private $errorArray;
            public function __construct(){
                $this->errorArray = array(); 
            }

            public function register($un, $fn, $ln, $email, $cemail, $pass, $cpass){
                $this->validateUserName($un);
                $this->validateFirstName($fn);
                $this->validateLastName($ln);
                $this->validateEmails($email, $cemail);
                $this->validatePasswords($pass, $cpass);

                if(empty($this->errorArray)){
                    return true;
                }else{
                    return false;
                }
            }

            public function getError($error){
                if(!in_array($error, $this->errorArray)){
                    $error="";
                }
                return "<span class='errorMessage'>$error</span>";
            }

            function validateUserName($name){
                if(strlen($name)>25 || strlen($name)<5){
                    array_push($this->errorArray, Constants::$userNameCharacters);
                    return;
                }

                //TODO : if user exists
            }          
        
            private function validateFirstName($firstName){
                if(strlen($firstName)>25 || strlen($firstName)<2){
                    array_push($this->errorArray, Constants::$firstNameCharacters);
                    return;
                }
            }
        
            private function validateLastName($lastName){
                if(strlen($lastName)>25 || strlen($lastName)<2){
                    array_push($this->errorArray, Constants::$lastNameCharacters);
                    return;
                }
            }
        
            private function validatePasswords($password, $confirmPassword){
                if($password != $confirmPassword){
                    array_push($this->errorArray,Constants::$passwordsDoNoMatch);
                    return;
                }
                
                if(preg_match('/[^A-Za-z0-9]/',$password)){
                    array_push($this->errorArray,Constants::$passwordNotAlphaNumeric);
                    return;
                }

                if(strlen($password)<8){
                    array_push($this->errorArray, Constants::$passwordCharacters);
                    return;
                }
            
            }
        
            private function validateEmails($email, $confirmEmail){
                if($email != $confirmEmail){
                    array_push($this->errorArray, Constants::$emailsDoNotMatch);
                    return;
                }

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($this->errorArray,Constants::$emailInvalid);
                    return;
                }

                //TODO : Check that username is already being used.
            }
           
        
        
    }
?>