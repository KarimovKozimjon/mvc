    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
    </head>
    <body>
        <p><?php echo $_SESSION['user']['name']; ?></p>
        <p><?php echo $_SESSION['user']['email']; ?></p> 
        <a href="/profile/edit">edit</a>
        <a href="/posts">show posts</a>
        <a href="/">go home</a>
    </body>
    </html>