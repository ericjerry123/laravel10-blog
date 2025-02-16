<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostService
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPosts()
    {
        return $this->postRepository->getAllPosts();
    }

    public function getPost(int $id)
    {
        $post = $this->postRepository->findById($id);

        if (!$post) throw new ModelNotFoundException("找不到 Post");

        return $post;
    }

    public function createPost(array $data)
    {
        $this->postRepository->createPost($data);
    }
}
