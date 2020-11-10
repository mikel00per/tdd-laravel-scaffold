<?php


namespace Modules\Admin\Panel\Controllers;


use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Base\AdminController;
use Modules\Admin\Panel\Repositories\PanelRepository;
use Spatie\Menu\Link;

class PanelController extends AdminController
{

    public function __construct(PanelRepository $repository)
    {
        parent::__construct();


        $this->menu->each(function (Link $link) {
            if ($link->text() === __('Dashboard')) {
                $link->addClass('active');
            }
        });

        $this->middleware('auth');
        $this->repository = $repository;

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function home()
    {
        return view('admin.home', $this->data);
    }


}
