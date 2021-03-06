<?php
namespace App\Repositories\Todos;

interface TodoRepositoryInterface
{
    public function getAll();

    public function show($id);

    public function create(array $attributes);

    // public function create(Request $request);

    public function update(array $attributes, $id);

    //public function deleteTodo($id);
    public function delete($id);
}

?>
