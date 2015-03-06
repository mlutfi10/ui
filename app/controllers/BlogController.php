<?php
 
class BlogController extends BaseController {

	public function newblog()
	{
		$validator = Validator::make(
									 	Input::all(),
										array(
											  'title' =>'required',
											  'content' =>'required'
											  )
									 );
		if($validator->passes())
		{	
			$input = Input::all();
			$id=Auth::id();
			$user = new User();
			$blog = new Blog();
			//$user->updatetotalpost($id);
			$blog->newblog($id,$input['title'],$input['content']);
			return Redirect::to('bloglist');
		}
		else
		{	
			return Redirect::to('newblog')->withErrors($validator)->withInput();
		}
	}
	
	public function bloglist()
	{
		$user=User::all();
		return View::make('listblog')->with('data',$user);
		/*(foreach($user as $u)
			foreach($u->blog as $u2)
				echo $u->username." ".$u2->title;
		*///foreach($blog as $b)
			//echo $b->title." ".$b->user->username;
	}
	
	public function blog($id)
	{
		$blog= new Blog();
		$data=$blog->getdata($id);
		return View::make('blog')->with('data',$data);
	}
	
	public function newcomment()
	{
		$validator = Validator::make(
									 	Input::all(),
										array(
											  'comment' =>'required'
											  )
									 );
		if($validator->passes())
		{	
			$input = Input::all();
			$id=Auth::id();
			$user = new User();
			$comment = new Comment();
			$user->updatetotalpost($id);
			$comment->newcomment($input['idblog'],$id,$input['comment']);
			return Redirect::to('blog/'.$input['idblog']);
		}
		else
		{	
			return Redirect::to('blog/'.$input['idblog'])->withErrors($validator)->withInput();
		}
	}

}