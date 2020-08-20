<?php

namespace App\Repositories;

use App\Post;

class PostRepository extends Repository
{
    /**
     * Specify Model class name
     * @return mixed
     */
    public function model()
    {
        return Post::class;
    }
}
