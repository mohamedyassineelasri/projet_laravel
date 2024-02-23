<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function post(){
        return $this->hasMany(Post::class,'profile_id');
    }
    protected $fillable = [
        'name',
        'email',
        'password',
        'bio',
        'image',
    ];
}
