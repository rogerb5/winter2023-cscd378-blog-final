<!DOCTYPE html>
<html lang="en">
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
    <!-- header content here -->
</header>

<section class="aboutme" id="aboutme">
    <div class="aboutmetext">
        <h1>About Me</h1>
        <p>Information about us goes here</p>
    </div>
</section>

<section class="form-section">
    <form action="" class="admin-form" method="POST">
        <ul>
            <label for="user">Username:</label>
            <li>
                <input type="text" id="user" name="user" required />
            </li>
        </ul>
        <ul>
            <label for="message">Message:</label>
            <li>
                <input type="text" id="message" name="message" required />
            </li>
        </ul>
        <input type="submit" value="Post" name="post_comment">
    </form>

    <div class="comments-section">
        <h2>Comments</h2>
        <?php include 'comments.php'; ?>
    </div>
</section>

<footer>
    <!-- footer content here -->
</footer>
</body>
</html>
