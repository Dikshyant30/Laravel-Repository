<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Repositories\Todos\TodoRepositoryInterface;
use Validator;
use App\Rules\Uppercase;

class TodoController extends Controller
{
  private $todo;
  public function __construct(TodoRepositoryInterface $todos)
  {
    $this->todo=$todos;
  }

  public function createTodo(Request $request)
  {

    $validate=Validator::make($request->all(),[
      'text'=>'required',
      'user_id'=>'required',
      'completed'=>'required',
  ] );
  if($validate->fails())
  {
      return response()->json(['error'=>$validate->errors()],401);
  }
    $attribute = [
      'text'=>$request->input('text'),
      'user_id'=> $request->input('user_id'),
      'completed' => $request->input('completed')
    ];
    // $attribute->save();
    print_r($attribute);
    return $this->todo->create($attribute);
  }
  public function getAllTodos()
  {
    return $this->todo->getAll();
  }
  public function updateById(Request $request,$id)
  {
  //   $validate=Validator::make($request->all(),[
  //     'text'=>'required|max:20',
  //     'user_id'=>'required|max:20',
  //     'completed'=>'bail|required|in:1,0',
  // ] );
  
  // if($validate->fails())
  // {
  //     return response()->json(['error'=>$validate->errors()],401);
  // }

  
$request->validate([
    'text' => ['required', 'string', new Uppercase],
    'user_id' => ['required', 'max:20'],
    'completed' => ['required', 'in:1,0']
]);

// if($validate->fails())
//   {
//       return response()->json(['error'=>$validate->errors()],401);
//   }

    $attribute = [
      'text'=>$request->input('text'),
      'user_id'=> $request->input('user_id'),
      'completed' => $request->input('completed')
    ];
    print_r($attribute);
    
    return $this->todo->update($attribute,$id);
  }
  public function destroy($id)
  {
      return $this->todo->delete($id);
  }
  public function show($id)
  {
      return $this->todo->show($id);
  }
}
