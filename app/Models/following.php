<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class following extends Model
{
    use HasFactory;
//     public function followers()
// {
//     // return $this->belongsToMany('Shop\User', 'followers', 'user_id ', 'follower_id');
//     return $this->belongsToMany(User::class);
// }

// public function followings()
// {
//     // return $this->belongsToMany('Shop\User', 'followers', 'follower_id', 'user_id');
//     return $this->belongsToMany(User::class);
// }
}
