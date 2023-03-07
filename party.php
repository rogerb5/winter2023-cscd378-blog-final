<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
$_SESSION['page_id'] = 4;
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
        <a href="index.html">
            <img src="assets/svg/logo.svg" class="logo" alt="Teaspot logo">
        </a>
        <div class="info-div">
            <h1 class="p-header">The place to spill the tea</h1>
        </div>
        <nav class="icon-holders">
            <!-- <img src="assets/svg/dark-mode.svg" class="svg-n svg-dark-m" alt="dark mode logo"> -->
            <a href="login.html">
                <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon">
            </a>
            <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo">
        </nav>
    </header>

    <section class="whole-article">
        <figure>
            <img class="article-img" src="assets/img/4.jpg" alt="">
        </figure>

        <section class="article-info">

            <section class="article-nav">
                <figcaption>
                    Hosting a Tea Party!
                </figcaption>
                <figcaption>
                    3/15/2023
                </figcaption>
            </section>

            <p class="article-p">
                Hosting a tea party is a great way to bring friends and family together for a relaxed and elegant
                gathering. To complete the experience, it is important to choose the right snacks to serve. Here are
                some suggestions for delicious and sophisticated tea party snacks that are sure to impress your guests.
            </p>

            <p class="article-p">
            <ul>
                <li>1. Finger Sandwiches: Finger sandwiches are a classic choice for tea parties. Fill your sandwiches
                    with a variety of ingredients, such as cucumber, egg salad, smoked salmon, or ham and cheese. Cut
                    the sandwiches into small, bite-sized portions for easy snacking.</li>
                <li>
                    2. Scones: Scones are a staple of English tea parties, and they’re perfect for spreading with
                    butter, jam, or clotted cream. Serve a variety of flavors, such as plain, fruit-filled, or savory
                    scones for a diverse selection.
                </li>

                <li>
                    3. Pastries: Pastries such as croissants, tarts, or éclairs are a delicious addition to any tea
                    party. Choose a selection of sweet and savory options to satisfy a variety of tastes.
                </li>

                <li>
                    4. Tea Cakes: Tea cakes are a light and sweet snack that pair perfectly with a cup of tea. Serve a
                    variety of flavors, such as lemon, poppy seed, or vanilla, for a diverse selection
                </li>

                <li>
                    5. Shortbread Cookies: Shortbread cookies are a simple yet sophisticated snack that are perfect for
                    a tea party. Serve plain or flavored shortbreads, such as rosemary or lavender, for a touch of
                    elegance.
                </li>

                <li>
                    6. Fruit Skewers: Fresh fruit skewers are a healthy and refreshing snack that are perfect for a tea
                    party. Choose a variety of seasonal fruit, such as berries, melon, or citrus, and serve with a
                    dollop of whipped cream.
                </li>

                <li>
                    7. Tea Sandwiches: Tea sandwiches are a fun and unique snack that are perfect for a tea party. Fill
                    your sandwiches with a variety of ingredients, such as smoked salmon, cream cheese, or cucumber, and
                    cut them into small, bite-sized portions.
                </li>
            </ul>
            </p>

            <p class="article-p last-p">
                In conclusion, hosting a tea party is a wonderful way to bring people together and enjoy each other’s
                company. To complete the experience, choose a selection of delicious and sophisticated snacks that are
                sure to impress your guests. From finger sandwiches to tea cakes, the possibilities are endless.
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
            <a href="index.html" class="f-link">Home</a>
            <a href="#" class="f-link">About</a>
            <a href="login.html" class="f-link">Login</a>
        </section>
        <form>
            <p><label for="newsletter" class="newsletter">Sign up for our newsletter:</label></p>
            <input type="text" id="newsletter" name="" />
            <button data-filter="" class="btn">Submit</button>
        </form>
    </footer>
    <!-- <script src="" async defer></script> -->
</body>

</html>