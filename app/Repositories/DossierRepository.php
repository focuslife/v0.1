<?php

namespace App\Repositories;

use App\Dossier;
use App\Repositories\PostRepository;

class DossierRepository extends PostRepository
{

    /*protected $folder;

    public function __construct(Folder $folder)
	{
		$this->folder = $folder;
	}
	
	public function getPaginate($n)
	{
		return $this->folder->with('user', 'posttype')
		->orderBy('posts.created_at', 'desc')
		->paginate($n);
	}*/

	public function getMaxDossiers($n)
	{
		return $this->post->with('user', 'posttype')
		->where('posts.posttype_id', 2)
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