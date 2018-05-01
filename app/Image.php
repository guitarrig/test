<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['name', 'worker_id'];
    public $timestamps = false;
}
