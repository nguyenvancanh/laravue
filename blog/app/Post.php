<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Favorite;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    public function favorited()
    {
        return (bool) Favorite::where('user_id', Auth::id())
                            ->where('post_id', $this->id)
                            ->first();
    }
}
