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

    public function getById($id)
    {
        return $this->findById($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id,array $attributes)
    {
        $todo=$this->model->findOrFail($id);
        $todo->update($attributes);
        return $todo;

    }

    public function delete($id)
    {
        $this->getById($id)->delete();
        return true;
    }

}
?>