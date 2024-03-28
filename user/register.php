<?php 
include "../includes/header.php";
?>
<div class="login-section">
        <div class="materialContainer">
            <div class="box">
                
              <?php
              if(isset($_SESSION['rg_message'])){
                echo $_SESSION['messgae'];

              }

              ?>
                <form method="POST"  action="../controller/all_action.php">
                    
                    <input type="hidden" name="_token" value="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
                    <div class="login-title">
                        <h2>Register</h2>
                    </div>

                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required="" autofocus="" autocomplete="name">
                    </div>

                    <div class="input">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="block mt-1 w-full" type="text" name="phone"
                            :value="old('phone')" required="" autofocus="" autocomplete="phone">
                    </div>

                    <div class="input">
                        <label for="emailname">Email Address</label>
                        <input type="email" id="emailname" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required="" autocomplete="username">
                    </div>

                    <div class="input">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="block mt-1 w-full" name="password" required=""
                            autocomplete="new-password">
                    </div>

                    <div class="input">
                        <label for="compass">Confirm Password</label>
                        <input type="password" id="compass" class="block mt-1 w-full" name="password_confirmation"
                            required="" autocomplete="new-password">
                    </div>

                    <div class="button login">
                        <button type="submit" name="register">
                            <span>Sign Up</span>
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </form>
            </div>
            <p><a href="login.php" class="theme-color">Already have an account?</a></p>
        </div>
    </div>
    <style>
        input [type="text"]:focus,
        [type="email"]:focus,
        [type="url"]:focus,
        [type="password"]:focus,
        [type="number"]:focus,
        [type="date"]:focus,
        [type="datetime-local"]:focus,
        [type="month"]:focus,
        [type="search"]:focus,
        [type="tel"]:focus,
        [type="time"]:focus,
        [type="week"]:focus,
        [multiple]:focus,
        textarea:focus,
        select:focus {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:hover,
        [type="email"]:hover,
        [type="url"]:hover,
        [type="password"]:hover,
        [type="number"]:hover,
        [type="date"]:hover,
        [type="datetime-local"]:hover,
        [type="month"]:hover,
        [type="search"]:hover,
        [type="tel"]:hover,
        [type="time"]:hover,
        [type="week"]:hover,
        [multiple]:hover,
        textarea:hover,
        select:hover {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

        input [type="text"]:active,
        [type="email"]:active,
        [type="url"]:active,
        [type="password"]:active,
        [type="number"]:active,
        [type="date"]:active,
        [type="datetime-local"]:active,
        [type="month"]:active,
        [type="search"]:active,
        [type="tel"]:active,
        [type="time"]:active,
        [type="week"]:active,
        [multiple]:active,
        textarea:active,
        select:active {
            --tw-ring-color: transparent !important;
            border-color: transparent !important;
        }

<?php 
include "../includes/footer.php";
?>