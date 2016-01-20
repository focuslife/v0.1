<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    protected $postRepository;
    protected $nbrPerPage = 4;
	protected $nbrMaxToShow = 6;

    public function __construct(PostRepository $postRepository)
	{
		/*$this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);*/

		$this->postRepository = $postRepository;
	}

	public function index()
	{
		//$posts = $this->postRepository->getPaginate($this->nbrPerPage);
		//$links = $posts->setPath('')->render();
		//return view('posts.liste', compact('posts', 'links'));
		$posts = $this->postRepository->getMaxPosts($this->nbrMaxToShow);
		$mostRecentPost = $this->postRepository->lastPost();
		return view('focuslife-accueil', compact('posts', 'mostRecentPost'));
	}

	public function create()
	{
		return view('posts.add');
	}

	public function store(PostRequest $request)
	{
		$inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

		$this->postRepository->store($inputs);

		return redirect(route('post.index'));
	}
	
	public function show($id)
	{
		$post = $this->postRepository->getById($id);

		return view('focuslife-article',  compact('post'));
	}

	public function destroy($id)
	{
		$this->postRepository->destroy($id);

		return redirect()->back();
	}

}