<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{

	protected $table = 'post_type';

    protected $fillable = ['type'];

	public $timestamps = true;

	public function posts() 
	{
		return $this->hasMany('App\Post');
	}
	
}