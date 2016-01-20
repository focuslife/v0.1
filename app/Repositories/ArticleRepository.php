<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository
{

    protected $article;

    public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function getPaginate($n)
	{
		return $this->article->with('user')
		->orderBy('articles.created_at', 'desc')
		->paginate($n);
	}

	public function store($inputs)
	{
		$this->article->create($inputs);
	}

	public function destroy($id)
	{
		$this->article->findOrFail($id)->delete();
	}

}