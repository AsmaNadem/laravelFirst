<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'cont',
        'status',
        'show',
    ];
    public function getCreatedAtAttribute($value)
    {
        return date('m-D h:i',strtotime($value));
    }

    public function getupdatedAtAttribute($value)
    {
        return date('m-D h:i',strtotime($value));
    }
}
