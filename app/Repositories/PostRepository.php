<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{

    protected $post;

    public function __construct(Post $post)
	{
		$this->post = $post;
	}
	
	public function getPaginate($n)
	{
		return $this->post->with('user', 'posttype')
		->orderBy('posts.created_at', 'desc')
		->paginate($n);
	}

	public function getMaxPosts($n)
	{
		return $this->post->with('user', 'posttype')
		->orderBy('posts.created_at', 'desc')
		->skip(1)
		->take($n)
		->get();
	}
	
	public function lastPost()
	{
		return $this->post->with('user', 'posttype')
		->orderBy('posts.created_at', 'desc')
		->first();
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