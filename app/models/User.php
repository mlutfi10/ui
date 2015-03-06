<?php 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class User extends Eloquent implements UserInterface, RemindableInterface {

    protected $table = 'users';
  	protected $primaryKey = 'id_user';
    public $timestamps = false;
	

    protected $hidden = array('password');
	
	public function blog()
	{
		return $this->hasMany('Blog','id_user');	
	}
	
	public function register($input)
	{
		$this->username = $input['username'];
        $this->password = Hash::make($input['password']);
        
        $this->save();
        return true;	
	}
	
	public function getdata($a)
	{
		return self::where('id_user','=',$a)->first();	
	}
	
	public function updatetotalpost($id)
	{
		$user=User::find($id);
		$post=$user->totalpost;
		$post++;
		$user->totalpost = $post;
		$user->save();
	}
	
	public function getAuthIdentifier()
    {
        return $this->getKey();
    }
 
    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
 
    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }
 
    public function getRememberToken()
    {
        return $this->remember_token;
    }
 
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }
 
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
	
 
}