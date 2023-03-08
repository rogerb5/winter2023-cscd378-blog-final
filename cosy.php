<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
$_SESSION['page_id'] = 3;
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

<body>

    <header class="index-header">
        <a href="index.php">
            <img src="assets/svg/logo.svg" class="logo" alt="Teaspot logo">
        </a>
        <div class="info-div">
            <h1 class="p-header">The place to spill the tea</h1>
        </div>
        <nav class="icon-holders">
            <img src="assets/svg/dark-mode.svg" class="svg-n svg-dark-m" alt="dark mode logo">
            <a href="login.php">
                <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon">
            </a>
            <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo">
        </nav>
    </header>

    <section class="whole-article">
        <figure>
            <img class="article-img" src="assets/img/3.jpg" alt="">
        </figure>

        <section class="article-info">

            <section class="article-nav">
                <figcaption>
                    Tea Cosy
                </figcaption>
                <figcaption>
                    3/15/2023
                </figcaption>
            </section>

            <p class="article-p">
                A tea cosy is a simple yet important piece of kit for any tea lover. Its main purpose is to keep your
                tea warm, but it can also add to the aesthetics of your tea-drinking experience and make a statement
                about your style and taste.
                The function of a tea cosy is straightforward: it fits snugly over a teapot to insulate it and maintain
                the temperature of the tea. This is especially important if you’re hosting a tea party or taking time to
                enjoy a leisurely cup of tea, as it ensures that each cup you pour will be warm and comforting, no
                matter how long the pot has been sitting.

            </p>

            <p class="article-p">
                When it comes to the materials used to make tea cosies, the options are diverse. Some of the most common
                materials include wool, cotton, silk, and even crochet. Each material offers its own unique benefits:
                wool is warm and cozy, cotton is durable and easy to care for, silk adds a touch of luxury, and crochet
                can be customized to match any décor.
                Aside from their functional benefits, tea cosies also play a role in creating a pleasing aesthetic for
                your tea table. Whether you’re hosting a tea party or simply enjoying a quiet cup at home, a beautifully
                designed tea cosy can add an extra touch of elegance to your tea service. With so many designs and
                styles to choose from, you’re sure to find one that fits your personal style and enhances the ambiance
                of your tea-drinking experience.
            </p>


            <p class="article-p last-p">
                In conclusion, a tea cosy is a practical and stylish accessory that every tea lover should have. Not
                only does it help keep your tea warm, but it also adds to the overall aesthetic of your tea table,
                making it a must-have item for anyone who appreciates the finer things in life.
            </p>


            <!-- Section where comments will be added -->
            <div class="comments-section">
                <h2>Comments</h2>
                <?php


                include 'comments.php';

                ?>
            </div>

            <!-- Comment form section -->
            <section class="comment-section">
                <form action="" method="POST" class="form-comment">
                    <ul>
                        <h3>Username:</h3>
                        <input type="text" id="user" name="user" required />
                    </ul>
                    <ul>
                        <h3>Comments:</h3>
                        <div>
                            <textarea name="message" id="message" style=""></textarea>

                        </div>
                        <input type="submit" value="Add" name = "http_post_comment">
                </form>
            </section>

        </section>
    </section>
    <footer>
        <section class="f-links">
            <a href="index.php" class="f-link">Home</a>
            <a href="#" class="f-link">About</a>
            <a href="login.php" class="f-link">Login</a>
        </section>
        <form>
            <p><label for="newsletter" class="newsletter">Sign up for our newsletter:</label></p>
            <input type="text" id="newsletter" name="" />
        </form>
    </footer>
    <!-- <script src="" async defer></script> -->
</body>

</html>