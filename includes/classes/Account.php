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

                if(empty($this->errorArray)){
                    return true;
                }else{
                    return false;
                }
            }

            function validateUserName($name){
                if(strlen($name)>25 || strlen($name)<5){
                    array_push($this->errorArray, "Your username must be between 5 and 25 characters");
                    return;
                }

                //TODO : if user exists
            }          
        
            private function validateFirstName($firstName){
                if(strlen($firstName)>25 || strlen($firstName)<2){
                    array_push($this->errorArray, "Your firstname must be between 2 and 25 characters");
                    return;
                }
            }
        
            private function validateLastName($lastName){
                if(strlen($lastName)>25 || strlen($lastName)<2){
                    array_push($this->errorArray, "Your lastname must be between 2 and 25 characters");
                    return;
                }
            }
        
            private function validatePasswords($password, $confirmPassword){
                if($password != $confirmPassword){
                    array_push($this->errorArray,"Your password don't match.");
                    return;
                }
                
                if(preg_match('/[^A-Za-z0-9]/',$password)){
                    array_push($this->errorArray,"Your password can only contain numbers and letters");
                    return;
                }

                if(strlen($password)<8){
                    array_push($this->errorArray, "Your password must be at least 8 characters long");
                    return;
                }
            
            }
        
            private function validateEmails($email, $confirmEmail){
                if($email != $confirmEmail){
                    array_push($this->errorArray, "Your email don't match.");
                    return;
                }

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    array_push($this->errorArray,"Please check the format of email.");
                    return;
                }

                //TODO : Check that username is already being used.
            }
           
        
        
    }
?>