<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use App\Http\Requests\ArticleRequest;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $articleRepository;

    protected $nbrPerPage = 4;
	
    public function __construct(ArticleRepository $articleRepository)
	{
		$this->middleware('auth', ['except' => 'index']);
		$this->middleware('admin', ['only' => 'destroy']);

		$this->articleRepository = $articleRepository;
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->articleRepository->getPaginate($this->nbrPerPage);
		$links = $articles->setPath('')->render();

		return view('articles.liste', compact('articles', 'links'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = array_merge($request->all(), ['user_id' => $request->user()->id]);

		$this->articleRepository->store($inputs);

		return redirect(route('article.index'));
    }

    /**
     * Display the specified resource. TO BE COMPLETED
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function show($id)
    {
        $article = $this->articleRepository->getById($id);

		return view('show',  compact('article'));
    } */

    /**
     * Show the form for editing the specified resource. TO BE COMPLETED
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
        $article = $this->articleRepository->getById($id);

		return view('edit',  compact('article'));
    } */

    /**
     * Update the specified resource in storage. TO BE COMPLETED
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, $id)
    {
        $this->articleRepository->update($id, $request->all());
		
		return redirect('article')->withOk("L'article " . $request->input('title') . " a été modifié.");
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->articleRepository->destroy($id);

		return redirect()->back();
    }
}
