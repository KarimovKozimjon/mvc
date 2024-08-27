<?php

class UserController{
    private $model;
    public function __construct(){
        $this -> model = new User();
        session_start();
    }
    public function profile(){
        require_once 'views/user/profile.php';
    }
    public function edit(){
        require_once 'views/user/edit.php';
    }
    public function handleEdit(){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $data = ['name' => $name, 'email'=> $email];
    $data['id'] = [$_SESSION['user']['id']];
    $_SESSION['user'] = $data;
    $_SESSION['massage'] = 'User has been updated';
    $this->model->update($_SESSION['user']['id'], $data);
    header('Location: /profile');
    }
}
