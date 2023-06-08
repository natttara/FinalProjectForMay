<?php

class Login {
    static function pageHead(){
        $htmlHead = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login Form</title>
            <link rel="stylesheet" href="../css/style.css">
            <!-- font awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        </head>
        <body class="login">
        ';
        return $htmlHead;
    }

    static function loginSection(){
        $htmlLogin = '
        <section class="containerLogin">
            <img src="./inc/img/luggage-cart.png">
            <form method="POST">
                <aside class="form-input">
                    <input type="text" name="email" placeholder="Enter your email"/>	
                </aside>
                <aside class="form-input">
                    <input type="password" name="password" placeholder="password"/>
                </aside>
                <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
            </form>
        </section>
        ';
        return $htmlLogin;
    } 

    static function endPage(){
        $htmlEnd = '
            </body>
        </html>
        ';
        return $htmlEnd;
    }
}