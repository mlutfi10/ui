<?php 

class Blog extends Eloquent {

    protected $table = 'blog';
  	protected $primaryKey = 'id_blog';
    public $timestamps = false;
	
	public function user()
	{
		return $this->belongsTo('User','id_user');	
	}
	
	public function comment()
	{
		return $this->hasMany('Comment','id_blog');
	}
	
	public function newblog($id,$content,$title)
	{
		$newblog = new Blog;
		$newblog->id_user=$id;
		$newblog->blog=$content;
		$newblog->title=$title;
		$newblog->save();
	}
	
	public function getdata($a)
	{
		$results = self::where('id_blog', '=', $a)->first();
		return $results;
	}
}