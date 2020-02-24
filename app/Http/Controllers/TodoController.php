<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\Todos\TodoRepositoryInterface;


class TodoController extends Controller
{
  private $todo;
  public function __construct(TodoRepositoryInterface $todos)
  {
    $this->todo=$todos;
  }
  public function getAllTodos()
  {
    return $this->todo->getAll();
  }
}
