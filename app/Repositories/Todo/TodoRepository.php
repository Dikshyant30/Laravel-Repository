<?php
namespace App\Repositories\Todo;
// namespace App\Http\Todo;
interface TodoRepository
{
public function getAll();

public function getById($id);

public function create(array $attributes);

public function update($id,array $attributes);

public function delete($id);
}

?>