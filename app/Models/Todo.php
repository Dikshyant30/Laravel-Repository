<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['text','user_id','completed','updated_at','created_at'];
  // public $timestamps = false;
    protected $hidden=['updated_at','created_at'];
    protected $primaryKey = 'id';
}
