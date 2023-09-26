<?php 
print_r($_SESSION);
if(Session::get("is_loggedin")){
    header("Location: ./Dashboard");
 }
else{ 
?>
    <div class="login-page">
    <div class="form">
    <?php
            if (isset($_SESSION['login_error']) && $_SESSION['login_error'] == true) {
                ?>
                <div class="alert alert-danger" role="alert">
                    Invalid Username and Password
                </div>
                <?php
                unset($_SESSION['login_error']);
            }
            ?>
            <form class="login-form" action="./login_page.php" method="post">
            <input type="email" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button type="submit">Login</button>
            <p class="message">Not registered? <a href="samplereg.html">Create an account</a></p>
            <!-- Add space using a div -->
            <div class="form-divider"></div>
            <!-- Add the "Forgot Password" button with an onclick event -->
            <button type="button" id="forgot-password-button" onclick="redirectToForgotPasswordPage()">Forgot Password?</button>
        </form>
    </div>
</div>

<script>
    function redirectToForgotPasswordPage() {
        // Redirect to the next page when "Forgot Password?" button is clicked
        window.location.href = "reset.html"; // Replace with the actual URL of the password reset page
    }
</script>
<?php
}?>

