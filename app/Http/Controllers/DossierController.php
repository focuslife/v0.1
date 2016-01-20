<?php

namespace App\Http\Controllers;

use App\Repositories\DossierRepository;
use App\Http\Requests\DossierRequest;

class DossierController extends PostController
{
    protected $dossierRepository;
    protected $nbrPerPage = 4;
	protected $nbrMaxToShow = 5;

    public function __construct(DossierRepository $dossierRepository)
	{
		/*$this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);*/

		$this->dossierRepository = $dossierRepository;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$posts = $this->dossierRepository->getMaxDossiers($this->nbrMaxToShow);
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
		$post = $this->dossierRepository->getById($id);
		if ($post->posttype_id == 2) {
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
