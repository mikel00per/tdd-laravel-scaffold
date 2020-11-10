<?php


namespace Core\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;
    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(int $perPage = 10)
    {
        return $this->model->paginate($perPage);
    }

    public function create(array $attributes) : Model
    {
        return $this->model->create($attributes);
    }

    public function read($id)  : Model
    {
        return $this->model->find($id);
    }

    public function update(array $data,string $id) : bool
    {
        return $this->model->find($id)->update($data);
    }

    public function delete(string $id) : bool
    {
        return $this->model->find($id)->delete();
    }


}
