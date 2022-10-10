<?php

namespace Blog\Src\Controllers;

// require_once('src/lib/database.php');
// require_once('src/model/comment.php');
// require_once('src/model/post.php');

use Blog\Src\lib\DatabaseConnection;
use Blog\Src\Model\CommentRepository;
use Blog\Src\Model\PostRepository;

class Post 
{
    public function execute(string $identifier)
    {
        $connection = new DatabaseConnection();

        $postRepository = new PostRepository();
        $postRepository->connection = $connection;
        $post = $postRepository->getPost($identifier);
    

        $commentRepository = new CommentRepository();
        $commentRepository->connection = $connection;
        $comments = $commentRepository->getComments($identifier);

        require('templates/post.php');
    }
}
