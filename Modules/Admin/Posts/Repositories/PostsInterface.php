<?php


namespace Modules\Admin\Posts\Repositories;

use Core\Repositories\BaseRepositoryInterface;
use Modules\Admin\Posts\Models\Post;

interface PostsInterface extends BaseRepositoryInterface
{
    public function create(array $attributes) : Post;
}
