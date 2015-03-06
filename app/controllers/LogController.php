<?php
 
class LogController extends BaseController {
 
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	
	public function test2(){
	echo Auth::user()->username;
	
	}
	
	public function test($id){
		echo $id;
	}
	 
    public function login()
    { 
		$validator = Validator::make
						(
							$input = Input::all(),
							array(
								  	'username' =>'required',
									'password' =>'required'
							  	 )
						);
						
		if($validator->passes())
		{
			$credentials = array(
                            'username' => $input['username'],
                            'password' => $input['password']
                            );
			
            if (Auth::attempt($credentials))
			{
              	return Redirect::to('/');
            }
			else
			{	
           		return Redirect::to('/')->withErrors('Login Gagal');
			}
		}
		else
		{
			return Redirect::to('/')->withErrors($validator)->withInput();	
		}

 
    }
 
    public function register()
	{
        $input = Input::all();
 
        $validator = Validator::make
						(
						 	$input,
							array(
								  	'username' => 'required|min:5|unique:users,username',
									'password' => 'required|min:6',
									'cpassword' => 'same:password'
								  )
						 );
		
        if($validator->fails()){
            return Redirect::to('register')->withErrors($validator)->withInput();
        }else{
            $user = new User();
            $simpan = $user->register($input);
            return Redirect::to('/');
            
        }
    }
 
    public function logout()
	{
        $id = Auth::id();
        Auth::logout($id);
 
        return Redirect::to('/');
    }
	
 
}