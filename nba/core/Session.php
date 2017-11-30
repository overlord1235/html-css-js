<?php 
namespace App\Core;
class Session {	
	public static function init(){
		session_start();
	}
	public static function login($user){
		$_SESSION['admin']=$user->username;
	}
	public static function logout(){
		unset($_SESSION['admin']);
	}

}