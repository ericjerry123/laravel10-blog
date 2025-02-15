<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAllPosts()
    {
        return Post::with('user')
            ->latest()
            ->get();
    }
}
