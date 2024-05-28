<?php
class Comment
{
    private $conn;
    private $table = 'komente';

    public $kid;
    public $user_id;
    public $post_id;
    public $kontenti;
    public $created_at;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Create comment
    public function create()
    {
        $query = "INSERT INTO " . $this->table . " (user_id, post_id, kontenti) VALUES (:user_id, :post_id, :kontenti)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':post_id', $this->post_id);
        $stmt->bindParam(':kontenti', $this->kontenti);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Get all comments for a specific post
    public function getByPostId($post_id)
    {
        $query = "SELECT * FROM " . $this->table . " WHERE post_id = :post_id ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':post_id', $post_id);
        $stmt->execute();
        return $stmt;
    }
}
