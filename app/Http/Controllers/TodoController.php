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
  public function createTodo(Request $request)
  {
    $attribute = [
      'text'=>$request->input('text'),
      'user_id'=> $request->input('user_id'),
      'completed' => $request->input('completed')
    ];
    // $attribute->save();
    print_r($attribute);
    return $this->todo->create($attribute);
  }

  public function updateById(Request $request,$id)
  {

    $attribute = [

      'text'=>$request->input('text'),
      'user_id'=> $request->input('user_id'),
      'completed' => $request->input('completed')
    ];
    print_r($attribute);
    
    return $this->todo->update($attribute,$id);
  }

  // public function deleteById($id)
  // {
    
  //    $this->todo->deleteTodo($id);
  //    return true;
  // }
  public function destroy($id)
  {
      return $this->todo->delete($id);
  }
  public function show($id)
  {
      return $this->todo->show($id);
  }
}
