<?php
include "partials/header.php";
// include "partials/banner.php";
// ?>

<div class="flex container login-page">

    <div class="motto-container">
        <p>
            Jint.Tech, offers the best services you ever need.
        </p>
    </div>
    <div class="">
        <form class="flex " action="" method="GET">
        
                <label for="username">Username</label>
                <input class="form-input" type="text">
                <label for="password">Password</label>
                <input class="form-input" type="password">
      
 
                <button class="btn form-btn" type="submit">
                    Login
                </button>
                <span> or <a href="/signup">Sign up</a></span>
   
        </form>
    
    </div>
</div>
    

<?php
include "partials/footer.php";
?>