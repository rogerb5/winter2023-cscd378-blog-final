<!DOCTYPE html>
<html lang="en">

<?php
include "newsletter.php"
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Teaspot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="index-header">
    <a href="index.php">
        <img src="assets/svg/logo.svg" class="logo" alt="The Teaspot logo" title="The Teaspot logo">
    </a>
    <div class="info-div">
        <h1 class="p-header" title="The place to spill the tea">The place to spill the tea</h1>
    </div>
    <nav class="icon-holders">
        <!-- <img src="assets/svg/dark-mode.svg" class="svg-n svg-dark-m" alt="dark mode logo" title="Dark Mode Logo"> -->
        <a href="login.php">
            <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon" title="User Login Icon">
        </a>
        <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo" title="Filter Menu Logo">
    </nav>
    <!-- header content here -->
</header>

<section class="aboutme" id="aboutme">
    <div class="aboutmetext">
        <h1>About Me</h1>
        <p>Information about us goes here</p>
    </div>
</section>

<footer>
    <section class="f-links">
        <a href="index.php" class="f-link">Home</a>
        <a href="About.php" class="f-link">About</a>
        <a href="login.php" class="f-link">Login</a>
    </section>
    <form action="" method="POST">
        <?php if (!empty($success)) { ?>
            <div class="success-message">
                <?php echo $success; ?>
            </div>
        <?php }?>
        <p><label for="email" class="newsletter">Sign up for our newsletter:</label></p>
        <input type="text" name="email" id = "email" />
        <input type="submit" value="Add" name = "news_email">
    </form>
</footer
</body>
</html>
