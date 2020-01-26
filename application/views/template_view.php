<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>btw_test</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <nav class="nav">
        <a class="nav-link" href="<?php require_once 'setting.php'; echo 'http://' . HOST . '/registration';?>">Sing up</a>
        <?php
        if($_SESSION['user']) {
            echo '<a class="nav-link active" href="' . 'http://' . HOST . '/authentication/SignOut'. '">Sign Out</a>';
        } else {
            echo '<a class="nav-link active" href="' . 'http://' . HOST . '/authentication'. '">Sign In</a>';
        }
        ?>
        <a class="nav-link" href="<?php echo 'http://' . HOST . '/callback';?>">Callback</a>
        <a class="nav-link" href="<?php echo 'http://' . HOST . '/feedbacks';?>">Feedbacks</a>'
        <a class="nav-link" href="<?php echo 'http://' . HOST . '/'?>">Today`s weather</a>
    </nav>
    <?php include 'application/views/'.$content_view;?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous">
    </script>
</body>
</html>
