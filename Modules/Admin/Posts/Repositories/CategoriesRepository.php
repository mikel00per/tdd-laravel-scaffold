<?php


namespace Modules\Admin\Posts\Repositories;


use Core\Repositories\BaseRepository;
use Modules\Admin\Posts\Models\Category;

class CategoriesRepository extends BaseRepository implements CategoriesInterface
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }

    public function all(): array
    {
        return $this->model->all()->toArray();
    }
}
