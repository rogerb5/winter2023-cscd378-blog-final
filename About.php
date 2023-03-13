<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
//$_SESSION['page_id'] = NULL;
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Teaspot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    section.about-us {
        margin: 2rem auto;
        width: 60%;
    }

    section.about-us p {
        margin: 1rem;
    }
</style>

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
        <?php if(isset($_COOKIE['logged_in'])) { ?>
            <form action="logout.php" method="POST">
                
            </form>
            <a href="logout.php">
                <img src="assets/svg/logout.svg" class="svg-n logout" alt="logout icon" title="Logout" />
            </a>
        <?php } else { ?>
            <a href="login.php">
                <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon" title="User Login Icon">
            </a>
        <?php } ?>
        <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo" title="Filter Menu Logo">
    </nav>
    <!-- header content here -->
</header>
<section class="about-us">

        <article class="">
            <p class="about-p">
                Welcome to my blog dedicated entirely to teapots! Now, I know what you're thinking - "Why on earth would
                anyone want to create a blog entirely about teapots?" And to be honest, I'm not quite sure myself. It
                all started with the HTTP 418 code. For those who don't know, HTTP 418 is a client error response code
                indicating that the server refuses to brew coffee because it is a teapot. And let me tell you, when I
                first saw that code, I laughed so hard I almost spilled my own cup of tea.
            </p>
            <p class="about-p">
                From there, things just got a little out of hand. I found myself scrolling through teapot images online,
                admiring the different shapes and colors and designs. Before I knew it, I had a collection of teapots in
                my kitchen, each one with its own unique personality. And then, like a true teapot addict, I started
                browsing tea recipes, experimenting with different blends and flavors.
            </p>
            <p class="about-p">
                It wasn't long before I realized that I had a true passion for teapots - and that's when the idea for
                this blog was born. I wanted a place to share my love for teapots with the world, to explore the
                different styles and designs, and to share some of my favorite tea recipes along the way.
            </p>

            <p class="about-p">
                But let's be real, it's not just about the teapots. It's about the experience of brewing and sipping
                tea, the comfort it brings on a cold day or the refreshment it provides on a hot one. And if I can make
                just one person smile with a funny HTTP code or inspire them to try a new tea recipe, then this blog
                will have been worth it.
            </p>

            <p class="about-p">
                So join me on this teapot journey, won't you? Let's explore the wonderful world of teapots together and
                see where it takes us. And if we happen to stumble upon any more hilarious HTTP codes along the way,
                well, all the better.
            </p>
        </article>

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
