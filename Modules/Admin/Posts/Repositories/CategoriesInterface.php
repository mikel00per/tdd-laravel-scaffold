<?php


namespace Modules\Admin\Posts\Repositories;


use Core\Repositories\BaseRepositoryInterface;

interface CategoriesInterface extends BaseRepositoryInterface
{
    public function all() : array;



}
