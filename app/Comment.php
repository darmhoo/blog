<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function rules(){
        return [
            'post_id' => 'required|int|exists:posts,title',
            'content' => 'required',
            'user_id' => 'required|int|exists:users,id'

        ];
    }

    public static function updateRules($id){
        return [
            'post_id' => 'sometimes|int|exists:posts,title' . $id,
            'content' => 'sometimes',
            'user_id' => 'sometimes|int|exists:users,id'

        ];
    }

    protected $with = ['posts'];


}
