<!doctype html>
<html lang="en">
<?php
include "comments.php";

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The Teaspot</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <!--<section class="modal">
        <nav class="modal-nav">
            <h1 class="m-blog-title">Title</h1>
            <a class="exit-modal">Exit</a>
        </nav>
        <article class="blog-article">
            <figure class="article-figure">
                <img class="m-img" src="assets/img/1.jpg" alt="Cinammon Tea and fruit">
                <img class="m-img" src="assets/img/2.jpg" alt="Cinammon Tea and fruit">
                <img class="m-img" src="assets/img/3.jpg" alt="Cinammon Tea and fruit">
                <img class="m-img" src="assets/img/4.jpg" alt="Cinammon Tea and fruit">
                <img class="m-img" src="assets/img/5.jpg" alt="Cinammon Tea and fruit">
                <img class="m-img" src="assets/img/7.jpg" alt="Cinammon Tea and fruit">
            </figure>
            <p class="article-p mp-1"></p>
            <p class="article-p mp-2"></p>
            <p class="article-p mp-3"></p>
        </article>
        <section class="btn-section">
            <button class="btn-m prev">Prev</button>
            <button class="btn-m next">Next</button>
        </section>
    </section>-->


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
                    <input type="submit" value="Logout" name="logout">
                </form>
            <?php } else { ?>
                <a href="login.php">
                    <img src="assets/svg/avatar.svg" class="svg-n avatar" alt="login icon" title="User Login Icon">
                </a>
            <?php } ?>
            <img src="assets/svg/ham.svg" class="svg-n hamburger" alt="hamburger menu logo" title="Filter Menu Logo">
        </nav>
    </header>

    <main class="index-main">
        <aside class="categories" role="A menu to filter out blog categories">
            <div class="button-div">
                <h5 class="aside-h5">Blog Categories</h5>
                <button data-filter="all" class="btn">All</button>
                <button data-filter="category-a" class="btn">Tutorial</button>
                <button data-filter="category-b" class="btn">Lifestyle</button>
                <button data-filter="category-c" class="btn">Decorations</button>
                <button class="sort"><span></span></button>
            </div>
            <article class="a-close">
                <p title="Filter Menu Logo">=</p>
            </article>
        </aside>

        <section class="blog-grid">
            <article data-filter="category-a" class="item">
                <figure title="Tea and macaroons">
                    <img loading="lazy" src="assets/img/1.jpg" alt="Tea and macaroons">
                </figure>
                <div class="blog-title">
                    <h2>Baking with Tea</h2>
                    <p>Tutorial</p>
                </div>
                <blockquote class="blog-p">
                    Baking with tea can be a fun and unique way to add flavor to your baked goods. Matcha and Earl
                    Grey
                    are two of the most popular teas to use in baking, and they can add a distinct and delicious
                    flavor
                    to your recipes. In this blog post, we'll explore the world of baking with tea, and we'll
                    provide
                    you with some delicious recipes for Matcha and Earl Grey baked goods.
                </blockquote>

                <a href="tea.php" class="article-a" id="article-a">See Blog</a>

            </article>

            <article data-filter="category-a" class="item">
                <figure title="Cinammon Tea and fruit">
                    <img loading="lazy" src="assets/img/2.jpg" alt="Cinammon Tea and fruit">
                </figure>
                <div class="blog-title">
                    <h2>Make English Tea</h2>
                    <p>Tutorial</p>
                </div>
                <blockquote class="blog-p">
                    Making a proper cup of tea English style is a time-honored tradition that has been passed down
                    through generations. It may seem simple, but there are a few key steps to follow to ensure a
                    delicious cup of tea every time.
                </blockquote>

                <a href="english.php" class="article-a" id="article-a">See Blog</a>

            </article>

            <article data-filter="category-c" class="category-c item cosy">
                <figure title="Rooster Yarn Piece Covered Teapot">
                    <img src="assets/img/3.jpg" alt="Rooster Yarn Piece Covered Teapot" loading="lazy" />
                </figure>
                <div class="blog-title">
                    <h2>Tea Cosy!</h2>
                    <p>Decorations</p>
                </div>
                <blockquote class="blog-p">
                    A tea cosy is a simple yet important piece of kit for any tea lover. Its main purpose is to keep
                    your tea warm, but it can also add to the aesthetics of your tea-drinking experience and make a
                    statement about your style and taste
                </blockquote>

                <a href="cosy.php" class="article-a" id="article-a">See Blog</a>

            </article>

            <article data-filter="category-a" class="item">
                <figure title="Squirrels drinking tea">
                    <img src="assets/img/4.jpg" alt="Squirrels drinking tea" loading="lazy" />
                </figure>
                <div class="blog-title">
                    <h2>Hosting a Tea Party</h2>
                    <p>Tutorial</p>
                </div>
                <blockquote class="blog-p">
                    Hosting a tea party is a great way to bring friends and family together for a relaxed and elegant
                    gathering. To complete the experience, it is important to choose the right snacks to serve. Here are
                    some suggestions for delicious and sophisticated tea party snacks that are sure to impress your
                    guests.
                </blockquote>

                <a href="party.php" class="article-a" id="article-a">See Blog</a>

            </article>

            <article data-filter="category-b" class="item hi">
                <figure title="Tea with Matcha">
                    <img src="assets/img/5.jpg" alt="Tea with Matcha" loading="lazy" />
                </figure>
                <div class="blog-title">
                    <h2>Tea as routine</h2>
                    <p>Lifestyle</p>
                </div>
                <blockquote class="blog-p">
                    Matcha: Matcha is a fine powder made from green tea leaves, and it has a unique flavor that is both
                    grassy and slightly sweet. Matcha is a popular ingredient in Japanese tea ceremonies, but it has
                    also found its way into the world of baking. When used in baking, matcha can add a vibrant green
                    color and a delicate, earthy flavor to your recipes. Here are some of our favorite Matcha recipes:
                </blockquote>

                <a href="routine.php" class="article-a" id="article-a">See Blog</a>

            </article>

            <article data-filter="category-b" class="item hi">
                <figure title="HTTP code image">
                    <img src="assets/img/7.jpg" alt="HTTP code image" loading="" />
                </figure>
                <div class="blog-title">
                    <h2>HTTP</h2>
                    <p>Lifestyle</p>
                </div>
                <blockquote class="blog-p">
                    The HTTP 418 error, also known as the "I'm a teapot" error, is a quirky and entertaining part of the
                    world of web development. But did you know that this error code has roots in the tradition of
                    drinking tea and using teapots? In this blog post, we'll explore the connection between tea,
                    teapots, and the HTTP 418 error.
                </blockquote>

                <a href="http.php" class="article-a" id="article-a">See Blog</a>

            </article>
        </section>
    </main>

    <footer>
        <section class="f-links">
            <a href="index.html" class="f-link">Home</a>
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
    </footer>
    <script src="js/app.js"></script>
    <script src="js/jquery.js"></script>
</body>

</html>