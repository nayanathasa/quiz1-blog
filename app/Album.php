<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    protected $primaryKey = 'id';

    protected $fillable = ['name', 'text', 'photo_id'];
}
