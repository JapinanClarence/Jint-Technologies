<?php
include "partials/header.php";
// include "partials/banner.php";
// ?>

<div class="flex align-center login-page">
    
    <div class="motto-container">
        <p>
            Jint.Tech, offers the best services you ever need.
        </p>
    </div>
    <div class="">
        <form class="flex rounded-corner" action="" method="GET">
                <label for="first_name">First name</label>
                <input class="form-input" type="text">
                <label for="last_name">Last name</label>
                <input class="form-input" type="text">
                <label for="email">Email</label>
                <input class="form-input" type="email">
                <label for="password">Password</label>
                <input class="form-input" type="password">
   
                <button class="btn form-btn" type="submit">
                    Sign up
                </button>
                <span class="text-align"> Already have an account? <a href="/login">Login</a></span>
   
        </form>
    
    </div>
</div>
        

<?php
include "partials/footer.php";
?>