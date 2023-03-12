<!DOCTYPE html>
<?php
// start the session
session_start();

// set the page ID in the session
$_SESSION['page_id'] = 2;
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
            <img class="article-img" src="assets/img/2.jpg" alt="">
        </figure>

        <section class="article-info">

            <section class="article-nav">
                <figcaption>
                    Make English Tea
                </figcaption>
                <figcaption>
                    3/11/2023
                </figcaption>
            </section>

            <p class="article-p">
                Making a proper cup of tea English style is a time-honored tradition that has been passed down through
                generations. It may seem simple, but there are a few key steps to follow to ensure a delicious cup of
                tea every time.
            </p>

            <p class="article-p">
                Step 1: Choose Your Tea
                The first step in making a proper cup of tea is to choose your tea. English tea typically refers to
                black tea, and the most popular blends include Earl Grey, English Breakfast, and Darjeeling. Once you’ve
                selected your tea, measure out one teaspoon of loose tea leaves per cup of water, or one tea bag per
                cup.

            </p>

            <p class="article-p">
                Step 2: Boil the Water
                Next, boil the water. It is important to use freshly drawn water, as the quality of the water can
                greatly impact the taste of the tea. Once the water has reached a rolling boil, remove it from heat.
            </p>

            <p class="article-p">
                Step 3: Warm the Teapot
                To keep your tea hot for as long as possible, it is a good idea to warm the teapot first. Simply pour a
                little of the hot water into the teapot, swirl it around, and then pour it out.
            </p>

            <p class="article-p">
                Step 4: Steep the Tea
                Add your tea leaves or tea bags to the teapot and pour in the hot water. Let the tea steep for three to
                five minutes, depending on your preferred strength. For a milder cup, steep for three minutes, and for a
                stronger cup, steep for five minutes.
            </p>

            <p class="article-p">
                Step 5: Serve the Tea
                Once the tea has finished steeping, it is ready to be served. Pour the tea into cups, making sure to
                strain out any loose leaves. Traditionally, English tea is served with milk, so add a splash of milk to
                each cup, if desired.
            </p>

            <p class="article-p last-p">
                Step 6: Enjoy Your Cup of Tea
                Last but not least, sit back and enjoy your perfectly brewed cup of tea! Whether you’re sipping solo or
                sharing with friends, a proper cup of tea is the epitome of comfort and relaxation.
                In conclusion, making a proper cup of tea English style is a simple and enjoyable process. By following
                these six easy steps, you’ll be able to enjoy a delicious cup of tea every time. Whether you’re a tea
                aficionado or simply enjoy a good cup of tea, this traditional method is sure to please.
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
            <input type="text" id="newsletter" name="" />
        </form>
    </footer>
    <!-- <script src="" async defer></script> -->
</body>

</html>