<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'contents',


        ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->morphOne(Comment::class,'commentable');
    }

    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function tags(){
        return $this->morphToMany()(Tag::class,'taggable');

    }
}
