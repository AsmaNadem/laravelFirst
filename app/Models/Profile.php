<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable=[

        'mobile',
        'image',

        ];

    public function profileable(){ //teshof al column
        return $this->morphTo();//3ashan  ybdaa ya7athar al model w id 3end altalab ll model profile
    }
}


