<?php
include "partials/header.php";
// include "partials/banner.php";
// ?>
<div class="flex container login-page">
    
    <div class="container section">
        <p>
            Jint.Tech, offers the best services you ever need.
        </p>
    </div>
    <div class="container section">
        <form class="flex login-form" action="">
            <div>
                <label for="username">Username</label>
                <input class="form-input" type="text">
                <label for="password">Password</label>
                <input class="form-input" type="password">
            </div>
            <div>
                <button class="btn form-btn" type="submit">
                    Login
                </button>
                <span> or Sign up</span>
            </div>
        </form>
    
    </div>
</div>
    

<?php
include "partials/footer.php";
?>