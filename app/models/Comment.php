<?php

class Comment extends Eloquent {

    protected $table = 'post';
  	protected $primaryKey = 'id_post';
    public $timestamps = false;
	
	public function user()
	{
		return $this->belongsTo('User','id_user');	
	}
	
	public function blog()
	{
		return $this->belongsTo('Blog','id_blog');	
	}
	
	public function newcomment($idblog,$iduser,$post)
	{
		$newComment = new Comment;
		$newComment->id_user=$iduser;
		$newComment->id_blog=$idblog;
		$newComment->post=$post;
		$newComment->save();
	}
	
	public function getdata($a)
	{
		$results = self::where('id_post', '=', $a)->first();
		return $results;
	}
}