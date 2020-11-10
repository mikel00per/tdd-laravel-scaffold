<?php

namespace Core\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface {
    public function index(int $page = 10) ;
    /**
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes) : Model;
    /**
     * @param $id
     * @return mixed
     */
    public function read(string $id) : Model;

    /**
     * @param array $attributes
     * @param string $id
     * @return bool
     */
    public function update(array $attributes, string $id) : bool;

    /**
     * @param string $id
     * @return bool
     */
    public function delete(string $id) : bool ;
}
