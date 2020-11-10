<?php


namespace Modules\Web\Base;

use Core\Http\Controllers\Controller;

/**
 * Class WebBaseController
 *
 * Se extiende para sobreescribir el contenedor de datos para el controller
 * además se pondrán métodos específicos para los tipos comunes, donde los tipos serán
 * Web, Api y Admin.
 *
 * @package Modules\Web\Controllers
 */
class WebBaseController extends Controller
{
    /**
     * Variable de datos para el controlador
     *
     * @var array
     */
    public $data = [];
    /**
     * Sobrecarga del operador asignación = , acumula en el data
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
    /**
     * Sobrecarga del operador conseguir ->, coge del data
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->data[$name];
    }

    /**
     * Sobrecarga del operado isset sobre el obj $this->data.
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __construct()
    {
        parent::__construct();

    }


}
