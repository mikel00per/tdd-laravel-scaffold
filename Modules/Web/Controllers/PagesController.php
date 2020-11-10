<?php

namespace Modules\Web\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\Web\Base\WebBaseController;

class PagesController extends WebBaseController
{
    public function __invoke($page)
    {
        $this->title = $page;
        return view('web.pages.'.$page, $this->data);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function root()
    {
        return view('web.index');
    }


    public function index()
    {
        return view('web.pages.posts.index');
    }


    public function show()
    {
        return view('web.pages.posts.show');
    }

}
