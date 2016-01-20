<?php

namespace App\Repositories;

use App\News;
use App\Repositories\PostRepository;

class NewsRepository extends PostRepository
{

    /*protected $news;

    public function __construct(News $news)
	{
		$this->news = $news;
	}
	
	public function getPaginate($n)
	{
		return $this->news->with('user', 'posttype')
		->orderBy('posts.created_at', 'desc')
		->paginate($n);
	}*/

	public function getMaxNews($n)
	{
		return $this->post->with('user', 'posttype')
		->where('posts.posttype_id', 1)
		->orderBy('posts.created_at', 'desc')
		->take($n)
		->get();
	}
	
	public function getById($id)
	{
		return $this->post->findOrFail($id);
	}

	public function store($inputs)
	{
		$this->post->create($inputs);
	}

	public function destroy($id)
	{
		$this->post->findOrFail($id)->delete();
	}

}