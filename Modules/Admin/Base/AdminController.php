<?php


namespace Modules\Admin\Base;

use Core\Http\Controllers\Controller;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Laravel\Menu;

/**
 * Class BaseAdminController
 *
 * Se extiende para sobreescribir el contenedor de datos para el controller
 * además se pondrán métodos específicos para los tipos comunes, donde los tipos serán
 * Web, Api y Admin.
 *
 * @property Controller menu
 * @package Modules\Admin\Controllers
 */
class AdminController extends Controller
{
//    /**
//     *
//     * @var BaseRepository
//     */
//    private $repository;
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
        $this->menu = Menu::new()
            ->setWrapperTag('ul')
            ->withoutParentTag()
            ->addClass('nav navbar-nav list-group')
            ->route('home', __('Dashboard'))
            ->route('admin.posts.index', __('Posts'))
            ->route('languages.index', __('Translations'))
            ->route('mailableList', __('Email builder'))
            ->each(function (Link $link) {
                $link->addClass('list-group-item');
            });
        // TODO: Poner buien el selecter de link



        parent::__construct();
    }
}
