<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Http\Requests\NewsRequest;

class NewsController extends PostController
{
    protected $newsRepository;
    protected $nbrPerPage = 4;
	protected $nbrMaxToShow = 5;

    public function __construct(NewsRepository $newsRepository)
	{
		/*$this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);*/

		$this->newsRepository = $newsRepository;
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = $this->newsRepository->getMaxNews($this->nbrMaxToShow);
		return view('focuslife-posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
	{
		$post = $this->newsRepository->getById($id);
		if ($post->posttype_id == 1) {
			return view('focuslife-article',  compact('post'));
		}
		else {
			return view('errors/404');
		}
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function destroy($id)
    {
        //
    } */
}
