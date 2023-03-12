<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
$_SESSION['page_id'] = 6;
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
                
            </form>
            <a href="logout.php">
                <img src="assets/svg/logout.svg" class="svg-n logout" alt="logout icon" title="Logout" />
            </a>
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
            <img class="article-img" src="assets/img/1.jpg" alt="">
        </figure>
        <section class="article-info">
            <section class="article-nav">
                <figcaption>
                    Baking with Tea
                </figcaption>
                <figcaption>
                    3/15/2023
                </figcaption>
            </section>

            <p class="article-p">
                Baking with tea can be a fun and unique way to add flavor to your baked goods. Matcha and Earl Grey are
                two of the most popular teas to use in baking, and they can add a distinct and delicious flavor to your
                recipes. In this blog post, we'll explore the world of baking with tea, and we'll provide you with some
                delicious recipes for Matcha and Earl Grey baked goods.
            </p>

            <p class="article-p">
                Matcha: Matcha is a fine powder made from green tea leaves, and it has a unique flavor that is both
                grassy and slightly sweet. Matcha is a popular ingredient in Japanese tea ceremonies, but it has also
                found its way into the world of baking. When used in baking, matcha can add a vibrant green color and a
                delicate, earthy flavor to your recipes. Here are some of our favorite Matcha recipes:
            </p>

            <p class="article-p">
            <ul>
                <li>Matcha Cupcakes: These cupcakes are made with a fluffy and tender cake that is infused with matcha
                    powder. Top them with a fluffy matcha frosting for a perfectly sweet and refreshing treat.</li>
                <li>
                    Matcha Cookies: These chewy and crunchy cookies are a great way to enjoy matcha in a more portable
                    form. They're easy to make and they're perfect for on-the-go snacking.
                </li>

                <li>
                    Matcha Donuts: These donuts are made with a soft and tender dough that is infused with matcha
                    powder. They're perfect for a special breakfast treat or for a sweet and indulgent dessert.
                </li>
            </ul>
            </p>

            <p class="article-p last-p">
                Earl Grey: Earl Grey is a black tea that is flavored with bergamot oil, and it has a unique and slightly
                citrusy flavor. When used in baking, Earl Grey can add a subtle and sophisticated flavor to your
                recipes. Here are some of our favorite Earl Grey recipes:
            </p>


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
            <a href="About.php" class="f-link">About</a>
            <a href="login.php" class="f-link">Login</a>
        </section>
            <form action="" method="POST">
                <?php if (!empty($success)) { ?>
                    <div class="success-message">
                        <?php echo $success; ?>
                    </div>
                <?php }?>
            <p><label for="newsletter" class="newsletter">Sign up for our newsletter:</label></p>
            <input type="text" name="email" id = "email" />
            <input type="submit" value="Add" name = "news_email">
        </form>
    </footer>
    <!-- <script src="" async defer></script> -->
</body>

</html>