<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/posts/update" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($post['id']); ?>">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>
        
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>
        
        <div>
            <label for="image">Image:</label>
            <input type="file" id="image" name="image">
            <?php if (!empty($post['image'])): ?> 
                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="Current Image" style="max-width: 200px; display: block;">
            <?php endif; ?>
        </div>
        
        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
</body>
</html>
