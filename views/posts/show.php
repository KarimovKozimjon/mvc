<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show post</title>
</head>
<body>
    <h1><?php echo $post['title'];?></h1>
    <h1><?php echo $post['content'];?></h1>
    <h1><?php echo $post['author_name'];?></h1>
    <img src="/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image" style="max-width: 300px; max-height: 200px;">
    <h1><?php echo $post['created_at'];?></h1>
    <h1><?php echo $post['updated_at'];?></h1>
    <a href="/posts/delete?id=<?php echo $post['id']; ?>">delete</a>
    <a href="/posts/edit?id=<?php echo $post['id']; ?>">edit post</a>
    <a href="/posts">show posts</a>
</body>
</html>