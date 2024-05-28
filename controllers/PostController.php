<?php
require_once '../../models/Post.php';

class PostController
{
    private $postModel;

    public function __construct($db)
    {
        $this->postModel = new Post($db);
    }

    public function create($data)
    {
        try {
            $this->postModel->user_id = $data['user_id'];
            $this->postModel->title = $data['title'];
            $this->postModel->content = $data['content'];


            if ($this->postModel->create()) {
                echo "Post created successfully!";
            } else {
                echo "Failed to create post!";
            }
        } catch (Exception $e) {
            ErrorHandler::handleExceptions($e);
        }
    }

    public function getAll()
    {
        try {
            return $this->postModel->getAll();
        } catch (Exception $e) {
            ErrorHandeler::handleExceptions($e);
        }
    }
}
