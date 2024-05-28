<?php
require_once 'models/Post.php';

class PostController
{
    private $postModel;

    public function __construct($db)
    {
        $this->postModel = new Post($db);
    }

    public function create($data)
    {
        $this->postModel->user_id = $data['user_id'];
        $this->postModel->title = $data['title'];
        $this->postModel->content = $data['content'];


        if ($this->postModel->create()) {
            echo "Post created successfully!";
        } else {
            echo "Failed to create post!";
        }
    }

    public function getAll()
    {
        return $this->postModel->getAll();
    }
}
