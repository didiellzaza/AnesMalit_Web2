<?php
require_once 'models/User.php';

class UserController
{
    private $userModel;

    public function __construct($db)
    {
        $this->userModel = new User($db);
    }

    public function register($data)
    {
        $this->userModel->username = $data['username'];
        $this->userModel->password = $data['password'];
        $this->userModel->email = $data['email'];

        if ($this->userModel->create()) {
            echo "Registration successful!";
        } else {
            echo "Registration failed!";
        }
    }

    public function login($data)
    {
        $this->userModel->username = $data['username'];
        $user = $this->userModel->getByUsername();

        if ($user && password_verify($data['password'], $user['password'])) {
            echo "Login successful!";
        } else {
            echo "Login failed!";
        }
    }
}
