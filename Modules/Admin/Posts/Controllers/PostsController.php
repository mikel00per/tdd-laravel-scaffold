<?php

namespace Modules\Admin\Posts\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Admin\Base\AdminController;
use Modules\Admin\Posts\Repositories\CategoriesRepository;
use Modules\Admin\Posts\Repositories\PostsInterface;
use Modules\Admin\Posts\Repositories\PostsRepository;
use Modules\Admin\Posts\Requests\CreatePostRequest;
use Modules\Admin\Posts\Requests\UpdatePostRequest;
use Spatie\Menu\Link;

/**
 *
 * @property PostsRepository repository
 * @property mixed posts
 * @property Model|mixed post
 * @property array|mixed categories
 * @property PostsRepository postsRepository
 * @property CategoriesRepository categoriesRepository
 */
class PostsController extends AdminController
{

    /**
     * @var PostsRepository
     */
    private $repository;

    public function __construct(PostsRepository $postsRepository, CategoriesRepository  $categoriesRepository)
    {
        parent::__construct();

        $this->menu->each(function (Link $link) {
            if ($link->text() === __('Posts')) {
                $link->addClass('active');
            }
        });

        $this->postsRepository = $postsRepository;
        $this->categoriesRepository = $categoriesRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $this->posts = $this->postsRepository->index();
        return view('admin.posts.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $this->categories = $this->categoriesRepository->all();
//        ddd($this->data);
        return view('admin.posts.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreatePostRequest $request
     * @return RedirectResponse|Response
     */
    public function store(CreatePostRequest $request)
    {

        $this->postsRepository->create($request->validated());

        return redirect()->route('admin.posts.index')->with('message', 'Create brand successful!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function show(int $id)
    {
        $this->post = $this->postsRepository->read($id);
        return view('posts.show', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View|Response
     */
    public function edit(int $id)
    {
        $this->post = $this->postsRepository->read($id);
        return view('posts.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdatePostRequest $request, int $id): RedirectResponse
    {
        $this->postsRepository->update($request->validated(), $id);

        return redirect()
            ->route('posts.edit', $id)
            ->with('message', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->postsRepository->delete($id);

        return redirect()
            ->route('admin.brands.index')
            ->with('message', 'Delete successful!');
    }
}
