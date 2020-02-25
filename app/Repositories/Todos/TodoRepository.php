<?php
namespace App\Repositories\Todos;
use App\Models\Todo;

class TodoRepository implements TodoRepositoryInterface {

    private $model;
    public function __construct(Todo $model)
    {
        $this->model=$model;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    // public function getById($id)
    // {
    //     return $this->findById($id);
    // }
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update(array $attributes,$id)
    {
        $todo=$this->model->findOrFail($id);
        $todo->update($attributes);
        return $todo;
    }

    // public function deleteTodo($id)
    // {
    //     // $this->getById($id)->delete();
    //     // return true;
    //     return $this->model->destroy($id);
    // }
    public function delete($id)
    {
        return $this->model->destroy($id);
    }


}
?>
