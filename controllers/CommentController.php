<?php
require_once 'models/Comment.php';

class CommentController
{
    private $commentModel;

    public function __construct($db)
    {
        $this->commentModel = new Comment($db);
    }

    public function create($data)
    {
        $this->commentModel->user_id = $data['user_id'];
        $this->commentModel->post_id = $data['post_id'];
        $this->commentModel->kontenti = $data['kontenti'];

        if ($this->commentModel->create()) {
            echo "Comment created successfully!";
        } else {
            echo "Failed to create comment!";
        }
    }

    public function getByPostId($post_id)
    {
        return $this->commentModel->getByPostId($post_id);
    }
}
