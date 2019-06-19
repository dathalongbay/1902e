<?php
namespace App\Frontend;

/**
 * Import namespace vào trong class khác
 */
use App\Backend\Post;

class Category {

    public function __construct()
    {
        echo "<br>" . __METHOD__;
    }

    public function callPost() {

        $post = new Post();
        $post->showData();
    }


}