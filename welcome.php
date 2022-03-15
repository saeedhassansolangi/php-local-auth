<?php

session_start();
require ('./partials/header.php');

if($_SESSION['username'] == ""){
    header("Location: login_form.php");
}

?>

<div class="welcome">
    <div id="welcome-head">
        <h1> Welcome back  <span class="user"><?php echo $_SESSION['username']?></span></h1>
    </div>

    <p class="logout"><a href="./logout.php">Logut</a></p>
</div>
<?php
require ('./partials/footer.php');

?>