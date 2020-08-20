<?php

namespace App\Repositories;

use App\Comment;

class CommentRepository extends Repository
{
    /**
     * Specify Model class name
     * @return mixed
     */
    public function model()
    {
        return Comment::class;
    }
}
