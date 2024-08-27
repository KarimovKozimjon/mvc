<?php
require_once 'models/Post.php';

class PostController
{

    private $model;

    public function __construct()
    {
        require_once 'models/Post.php';
        $this->model = new Post();
    }
    public function index()
    {
        require_once 'models/Post.php';
        $posts = $this->model->all();
        require_once 'views/posts/index.php';
    }

    public function cPost()
    {
        require_once 'views/posts/create_post.php';
    }
    public function store()
    {
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = isset($_POST['title']) ? trim($_POST['title']) : null;
            $content = isset($_POST['content']) ? trim($_POST['content']) : null;

            $author_name = isset($_SESSION['user']['name']) ? $_SESSION['user']['name'] : 'Anonymous';

            $image = null;
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $image = 'uploads/' . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $image);
            }

            if ($title && $content) {
                $postData = [
                    'title' => $title,
                    'content' => $content,
                    'author_name' => $author_name,
                    'image' => $image
                ];
                $this->model->create($postData);

                header('Location: /posts');
                exit();
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Iltimos, barcha maydonlarni to\'ldiring.';
            }
        } else {
            $this->cPost();
        }
    }



    public function show()
    {
        $id = $_GET['id'];
        $post = $this->model->find($id);
        require 'views/posts/show.php';

    }
    public function delete()
    {
        require_once 'models/Post.php';
        $id = $_GET['id'];
        $post = $this->model->delete($id);
        require 'views/posts/delete.php';

    }
    public function locationEdit()
    {
        $id = $_GET['id'];
        $post = $this->model->find($id);
        require_once 'views/posts/edit.php';
    }



    public function edit_post()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $post = $this->model->find($id);
            $currentImage = $post['image'];
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = 'uploads/';
                $uploadFile = $uploadDir . basename($_FILES['image']['name']);
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    $image = $uploadFile;
                }
            }
            $data = [
                'title' => $title,
                'content' => $content,
                'image' => $image
            ];
            $this->model->update($id, $data);
            if ($currentImage && $image !== $currentImage && file_exists($currentImage)) {
                unlink($currentImage);
            }
            header('Location: /posts/show?id=' . $id);
            exit();
        }
    }





}