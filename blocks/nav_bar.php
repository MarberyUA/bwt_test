<nav class="nav">
    <?php
        if($_SESSION['user']){
            echo '<a class="nav-link active" href="http://localhost/sign_out">Sign Out</a>';
        } else {
            echo '<a class="nav-link active" href="/sign_in">Sign In</a>';
        }
    ?>
    <a class="nav-link" href="/registration">Sing up</a>
    <a class="nav-link" href="#">dsdsdsf</a>
</nav>