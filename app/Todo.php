<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Todo\TodoRepository;

class Todo extends Model
{
    protected $fillable=['text','user_id','completed'];
}
