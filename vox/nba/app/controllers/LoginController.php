<?php 
namespace App\Controllers;
use App\Core\App;
use App\Core\Session;
use App\Models\UserModel;
class LoginController{
	public function register(){
		return view('users/register');
	}
	public function registerpost(){
		UserModel::insert('admins', [
			'username'=>$_POST['username'],
			'password'=>md5($_POST['password'])
		]);
	}

	public function logout(){
		Session::logout();
		redirect('');
	}
	public function login(){
		$user=UserModel::selectone('admins',[
			'username' => $_POST['username']
		]);
			$password=md5($_POST['password']);
			if ($user[0]->password==$password){
				Session::login($user[0]);
				redirect('admin');
			}else {
				notify('Error',"Invalid User or Password","alert");
				redirect('');
			}
			
	}
	
}
?>