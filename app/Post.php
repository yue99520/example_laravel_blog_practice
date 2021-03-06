<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use MorphComment;

    use MorphLike;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function kanban()
    {
        return $this->belongsTo(Kanban::class);
    }
}
