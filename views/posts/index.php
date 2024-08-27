<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <?php foreach ($posts as $post): ?>
        <div>
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
            <?php if (!empty($post['image'])): ?>
                <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image" style="max-width: 300px; max-height: 200px;">
            <?php endif; ?>
            <p><strong>Author:</strong> <?php echo htmlspecialchars($post['author_name']); ?></p>
            <a href="/posts/show?id=<?php echo $post['id']; ?>">view post</a>
        </div>  
    <?php endforeach; ?>

    <a href="/create">Create Post</a>  

</body>
</html>
