<?php
ob_start(); // Start output buffering
include_once "../includes/header.php";
if (isset($_SESSION['user'])){
    header('Location: ../pages/home.php');
    exit();
}
ob_end_flush(); // Flush output buffer
?>

  <div class="login-section">
        <div class="materialContainer">
            <div class="box">
               
                <form method="POST" action="../controller/all_action.php">
                    <input type="hidden" name="_token" value="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
                    <div class="login-title">
                        <h2>Login</h2>
                    </div>
                    <div class="input">
                        <label for="name">Username</label>
                        <input type="email" id="name" name="email" :value="old('email')" required="" autofocus=""
                            autocomplete="name">
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                            autocomplete="current-password">
                    </div>

                    

                    <div class="button login">
                        <button name="login" type="submit">
                            <span>Log In</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>

                    <p>Not a member? <a href="register.php" class="theme-color">Sign up now</a></p>
                </form>
            </div>
        </div>
    </div>
