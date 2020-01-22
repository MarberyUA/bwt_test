
<div class="registration">
    <?php
    if($_SESSION['message']){
        echo '<p class="alert alert-danger error-message"> '. $_SESSION['message'] . '</p>';
    }
    ?>
    <form action="registration/register" method="post" enctype="multipart/form-data">
        <div class="">
            <span>Enter your first name:</span>
            <input type="text" name="first-name" class="form-control width-add" required placeholder="First name:">
        </div>
        <div class="">
            <span>Enter your last name:</span>
            <input type="text" name="last-name" class="form-control width-add" required placeholder="Last name:">
        </div>
        <div class="">
            <span>Enter your email:</span>
            <input type="email" name="email" class="form-control width-add" placeholder="Email:">
        </div>
        <div class="">
            <span>Enter your birthday:</span>
            <input type="date" name="birthday" placeholder="Birthday:">
        </div>
        <div class="">
            <span>Choose your gender:</span>
            <select name="gender" size="2">
                <option selected="Not matched">Not matched</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="">
            <span>Enter your password:</span>
            <input type="password" name="password-1" class="form-control width-add" required placeholder="Password:">
        </div>
        <div class="">
            <span>Confirm your password:</span>
            <input type="password" name="password-2" class="form-control width-add" required placeholder="Confirm password:">
        </div>
        <?php
        if($_SESSION['message']) {
            unset($_SESSION['message']);
            include 'setting.php';
            echo '<a href="' . 'http://' . HOST . '/registration"' . '>';
            echo '<button type="button" class="btn btn-primary">Try again</button>';
            echo '</a>';
        }
        else {
            echo '<button type="submit" class="btn btn-success">Sign up</button>';
        }
        ?>

    </form>
</div>
