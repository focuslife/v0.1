<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{

    protected $fillable = ['titre','contenu','user_id', 'posttype_id'];

	public $timestamps = true;

	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public function postType() 
	{
		return $this->belongsTo('App\PostType', 'posttype_id');
	}

}