<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $table = "photos";

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'text', 'post_id'];
}
