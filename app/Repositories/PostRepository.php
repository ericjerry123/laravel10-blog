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

    public function createPost(array $data)
    {
        return Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => 21,
        ]);
    }
}
