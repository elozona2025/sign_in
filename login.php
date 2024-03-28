<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login</title>

<style>
 body{
        /* background-image: url('image/DoubleBedGuest.jpg'); */
        background-color: #E6E7E8;
    }

    #border{
        background-color: white;
        margin: auto;
        padding: 30px;
        width: 20%;
        border: 1px solid grey;
        box-shadow: grey;
        

    }

    .input{
        margin: auto;
        padding: auto;
        border: none;
        width: 100%;
        font-family: arial;
        font-size: 15px;
        color: #334E;

     
    }

    input{
        background: white;
        margin: auto;
        padding: 10px;
        border: 1px solid grey;
        width: 80%;
        
        
     
    }

    #signin{
        background: #047AAC;
        margin: auto;
        padding: 10px;
        border: none;
        width: 80%;
        font-family: arial;
        font-size: 20px;
        color: white;
        box-shadow: grey;
    }

    #nav{
        background-color: #334E96;
        margin: auto;
        padding: 30px;
    }

    h1{
        color: #334E;
    }
    
</style>
</head>
<body>
    <div>
        <div id="nav"></div>
            <p> </p>
            <div id="border">
                <form action = "login_process.php" method = "post">
                    <h1>Sign In</h1>
                    <div class="login_error">
                        <?php
                        if(empty($_SESSION['login_error'])){
                        ?>
                        <div class="login_error">
                            <!--// $_SESSION['login_error'];?> -->
                            <?php //unset($_SESSION['usernamelogin_errot']);?>
                    
                            <?php }
                        ?>
                    </div>
                    <div class = "input">
                    <lable for = "username"> Username </lable> <br>
                    <input type ="text" name = "username" id = "username" placeholder = "Required"> <br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="password" placeholder = "Required"> <br><br>
                    <input type = "submit" name = "" value = "Sign In" id = "signin">
                    </div>
            </div>
    </div>




                </form?





</body>
</html?

?>