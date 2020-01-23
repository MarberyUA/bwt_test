<?php
if ($_SESSION['message']){
    echo '<p class="alert alert-danger error-message"> '. $_SESSION['message'] . '</p>';
    unset($_SESSION['message']);
}
?>
<?php if(!$_SESSION['success']) {
    echo '<form action="/authentication/sign_in" method="post" class="login">
        <div class="">
            <span>Your email:</span>
            <input type="text" name="login" class="form-control">
        </div>
        <div class="">
            <span>Your password:</span>
            <input type="password" name="password-login" class="form-control">
        </div>;
        <button type="submit" class="btn btn-success">Sign in</button>';
}
else {
    echo '<p class="alert alert-success error-message"> '. $_SESSION['success'] . '</p>';
    unset($_SESSION['success']);
}
        ?>

    </form>
</body>
</html>