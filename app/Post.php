<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //SS

    public function comment(){
        return $this->hasMany(Comment::class);
    }
    public function author(){
        return $this->belongsTo(User::class);
    }
    public static function rules(){
        return [
            'title' => 'required|unique:posts,title',
            'content' => 'required',
            'user_id' => 'required|int|exists:users,id'

        ];
    }

    public static function updateRules($id){
        return [
            'title' => 'sometimes|unique:posts,title' . $id,
            'content' => 'sometimes',
            'user_id' => 'sometimes|int|exists:users,id'

        ];
    }


}
