<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <form action="/store" method="post" enctype="multipart/form-data">
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
    <div>
        <button type="submit">Create Post</button>
    </div>
</form>

</body>
</html>
