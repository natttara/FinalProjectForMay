<?php

class SignUp {
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
        <body>
        ';
        return $htmlHead;
    }

    static function signUpSection(){
        $htmlSignUp = '
        <main class="signUp">
            <section class="sDecision">
                <h2>Which do you want to sign up for?</h2>
                <article>
                    <aside>
                        <label for="suUser">NORMAL USER</label>
                        <input type="checkbox" name="suUser" id="suUser" class="suUser" hidden>
                    </aside>
                    <aside>
                        <label for="suOwner">ROOM OWNER</label>
                        <input type="checkbox" name="suOwner" id="suOwner" class="suOwner" hidden>
                    </aside>
                </article>
            </section>
            <section class="containerLogin sfUser">
                <img src="./inc/img/luggage-cart.png">
                <form method="post">
                    <aside class="form-input">
                        <input type="text" name="name" placeholder="Your name" required/>	
                    </aside>
                    <aside class="form-input">
                        <input type="email" name="uEmail" placeholder="Your email" required/>	
                    </aside>
                    <aside class="form-input">
                        <input type="password" name="password" placeholder="Your password" required/>
                    </aside>
                    <input type="submit" type="submit" value="SIGN UP" class="btn-login"/>
                </form>
            </section>
            <section class="containerLogin sfOwner">
                <img src="./inc/img/luggage-cart.png">
                <form method="post">
                    <aside class="form-input">
                        <input type="text" name="name" placeholder="Your name" required/>	
                    </aside>
                    <aside class="form-input">
                        <input type="email" name="oEmail" placeholder="Your email" required/>	
                    </aside>
                    <aside class="form-input">
                        <input type="password" name="password" placeholder="Your password" required/>
                    </aside>
                    <input type="submit" type="submit" value="SIGN UP" class="btn-login"/>
                </form>
            </section>
        </main>
        ';
        return $htmlSignUp;
    } 

    static function successPage($name){
        $htmlSuccess = '
        <main class="signUp">
            <section class="successReg">
                <h2>'.$name.', you are registered!</h2>
                <a href="">Sign in</a>
            </section>
        </main>
        ';

        return $htmlSuccess;
    }

    static function endPage(){
        $htmlEnd = '
            </body>
        </html>
        ';
        return $htmlEnd;
    }
}