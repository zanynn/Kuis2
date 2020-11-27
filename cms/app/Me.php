<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Me extends Model
{
    protected $fillable = ['nameMe', 'descriptionMe', 'imageMe'];
}
