<?php 
    include("/includes/classes/Account.php");
    $account = new Account();
    
    include("/includes/handlers/registerhandler.php");
    include("/includes/handlers/login-handler.php");
?>

<html>
    <head>
        <title>Welcome!</title>
    </head>
    <body>
        
        <div id="inputContainer">
            <form id ="loginForm" action="register.php" method="POST">
                <h2>Login to your account</h2>
                <p>
                    <label for="loginUserName">Username</label>
                    <input id="loginUserName" name="loginUserName" type="text" placeholder="Enter username" required>
                </p>
                <p>
                    <label for="loginPassword">Password</label>
                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Enter password" required>
                </p>

                <button type="submit" name="LoginButton">Login</button>
            </form>



            <form id ="registerForm" action="register.php" method="POST">
                <h2>Create your free account</h2>
                <p>
                    <label for="userName">Username</label>
                    <input id="userName" name="userName" type="text" placeholder="Enter username" required>
                </p>
                <p>
                    <label for="firstName">First Name</label>
                    <input id="firstName" name="firstName" type="text" placeholder="Enter firstName" required>
                </p>
                <p>
                    <label for="lastName">Last Name</label>
                    <input id="lastName" name="lastName" type="text" placeholder="Enter lastName" required>
                </p>
                <p>
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="Enter email" required>
                </p>
                <p>
                    <label for="confirmEmail">Confirm Email</label>
                    <input id="confirmEmail" name="confirmEmail" type="email" placeholder="Confirm Email" required>
                </p>
                <p>
                    <label for="password">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter password" required>
                </p>
                <p>
                    <label for="confirmPassword">Confirm Password</label>
                    <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm password" required>
                </p>

                <button type="submit" name="registerButton">Register</button>
            </form>
        </div>
    </body>
</html>