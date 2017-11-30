<?php 
namespace App\Controllers;
use App\Core\App;
use App\Models\UserModel;
class UsersController{
	public function index(){
		return view('users',['users' => UserModel::selectAll('users')]);
	}
	public function store(){
		UserModel::insert('users', [
			'name'=>$_POST['name'],
			'prezime'=> "baba"
		]);
		redirect('users');
	}
	public function showuser($vars){
		return view('showuser',[
			'user' => UserModel::selectone('users',['id' => $vars[0]])
		]);
	}
	public function delete(){

		UserModel::delete('users',[
			'id' => $_POST['deleteid']
		]);
		redirect('users');
	}
	public function edituser($vars){

		return view('edituser',[
			'user' => UserModel::selectone('users',['id' => $vars[0]])
		]);

	}
	public function edituserpost(){
	
		
		App::get('database')->edit('users', [
			'name'=>$_POST['name'],
			'prezime'=>$_POST['prezime']
		],['id' => $_POST['id']]);

		redirect('users');
	}
}
?>