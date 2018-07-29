<?php 
    class Account{
            private errorArray;
            public function __construct(){
                $this->errorArray = array(); 
            }

            public function register($un, $fn, $ln, $email, $cemail, $pass, $cpass){
                $this->validateUserName($un);
                $this->validateFirstName($fn);
                $this->validateLastName($ln);
                $this->validateEmails($email, $cemail);
                $this->validatePasswords($pass, $cpass);
            }

            function validateUserName($name){
                if(strlen($name)>25 || strlen($name)<5){
                    array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                    return;
                }

                //TODO : if user exists
            }          
        
            private function validateFirstName($firstName){
                
            }
        
            private function validateLastName($lastName){
                
            }
        
            private function validatePasswords($password, $confirmPassword){
                
            }
        
            private function validateEmails($email, $confirmEmail){
                
            }
           
        
        
    }
?>