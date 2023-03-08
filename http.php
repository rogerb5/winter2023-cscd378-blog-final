<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
$_SESSION['page_id'] = 1;
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
            <?php if(isset($_COOKIE['logged_in'])) { ?>
                <form action="logout.php" method="POST">
                    <input type="submit" value="Logout" name="logout">
                </form>
            <?php } else { ?>
                <a href="login.php">
                    <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon" title="User Login Icon">
                </a>
            <?php } ?>
            <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo">
        </nav>
    </header>

    <section class="whole-article">
        <figure>
            <img class="article-img" src="assets/img/7.jpg" alt="">
        </figure>

        <section class="article-info">

            <section class="article-nav">
                <figcaption>
                    HTTP
                </figcaption>
                <figcaption>
                    3/15/2023
                </figcaption>
            </section>

            <p class="article-p">
                The HTTP 418 error, also known as the "I'm a teapot" error, is a quirky and entertaining part of the
                world of web development. But did you know that this error code has roots in the tradition of drinking
                tea and using teapots? In this blog post, we'll explore the connection between tea, teapots, and the
                HTTP 418 error.
            </p>

            <p class="article-p">
                The HTTP 418 error was first introduced as an April Fool's joke in 1998 by the Hyper Text Coffee Pot
                Control Protocol (HTCPCP) working group. The error message is meant to represent a teapot that is trying
                to serve coffee, but can only serve tea. This lighthearted joke was created to bring a touch of humor to
                the otherwise serious world of web development.
            </p>

            <p class="article-p">
                The connection between tea and teapots goes back centuries. Drinking tea has been a cherished tradition
                in many cultures, and teapots have been a staple of tea-drinking for just as long. Teapots are used to
                steep tea leaves and produce a flavorful and aromatic cup of tea. They come in a variety of shapes,
                sizes, and designs, and they can be made from materials such as ceramic, glass, or stainless steel.
            </p>


            <p class="article-p">
                So, what does the HTTP 418 error have to do with tea and teapots? In essence, the error message is a nod
                to the tradition of drinking tea and using teapots. By using a teapot to serve tea, we are acknowledging
                the timeless tradition of tea-drinking and bringing a touch of elegance and sophistication to our
                tea-drinking experience.
            </p>

            <p class="article-p">
                In the same way, the HTTP 418 error brings a touch of humor and lightheartedness to the world of web
                development. It serves as a reminder that even in the fast-paced and high-stress world of technology,
                there is still room for a little bit of fun and laughter.
            </p>

            <p class="article-p last-p">
                In conclusion, the HTTP 418 error is a quirky and entertaining part of the world of web development, but
                it also has roots in the tradition of drinking tea and using teapots. Whether you're a web developer or
                a tea aficionado, it's important to remember the connection between tea, teapots, and the HTTP 418
                error. So the next time you see the "I'm a teapot" error message, remember that it's a nod to the
                timeless tradition of tea-drinking and a reminder to take a moment to enjoy a cup of tea and a good
                laugh.
            </p>


            <!-- Section where comments will be added -->

            <!-- Section where comments will be added -->
            <div class="comments-section">
                <h2>Comments</h2>
                <?php


                include 'commentfunc.php';

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
        <form action="" method="POST">
            <?php if (!empty($success)) { ?>
                <div class="success-message">
                    <?php echo $success; ?>
                </div>
            <?php }?>
            <p><label for="newsletter" class="newsletter">Sign up for our newsletter:</label></p>
            <input type="text" id="newsletter" name="" />
        </form>
    </footer>

    <!-- <script src="" async defer></script> -->
</body>

</html>