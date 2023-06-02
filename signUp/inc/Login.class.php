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
            <main>
        ';
        return $htmlHead;
    }

    static function loginSection(){
        $htmlLogin = '
        <section class="containerLogin">
            <img src="./img/luggage-cart.png">
            <form>
                <aside class="form-input">
                    <input type="text" name="text" placeholder="Enter your username"/>	
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
                </main>
            </body>
        </html>
        ';
        return $htmlEnd;
    }
}