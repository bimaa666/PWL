<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password
            // password_hash($password,PASSWORD_DEFAULT)
		);
		$this->db->insert('db_user',$data_user);
	}
}
?>