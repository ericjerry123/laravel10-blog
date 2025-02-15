<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    public function getAllPosts()
    {
        return Post::with('user')
            ->latest()
            ->paginate(10);
    }

    public function findById(int $id): ?Post
    {
        return Post::find($id);
    }
}
