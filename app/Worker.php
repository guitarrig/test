<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
        'name', 'surname', 'patronymic', 'position', 'work_start', 'salary', 'parent_id'
    ];
    public $timestamps = false;

    public function image(){
      return $this->hasOne('App\Image');
    }


}
