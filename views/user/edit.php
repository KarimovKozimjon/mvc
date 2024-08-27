<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
</head>
<body>
    <h1>profile edit</h1>
    <form action="/handleEdit" method="post">
        <input type="text" name="name"value="<?php echo $_SESSION['user']['name']; ?>">
        <input type="email" name="email"value="<?php echo $_SESSION['user']['email']; ?>">
        <input type="submit" value="save">
    </form>
</body>
</html>