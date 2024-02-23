<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function profil(){
        return $this->belongsTo(Profile::class);
    }
    protected $fillable=[
        'profile_id',
        'title',
        'bio',
        'image',
    ];
}
