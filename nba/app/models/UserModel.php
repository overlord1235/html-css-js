<?php 


namespace App\Models;
use App\Core\App;
class UserModel {
	
	public static function selectAll($table){
		return App::get('database')->selectAll($table);
	}
	public static function insert($table,$vars = []){
		App::get('database')->inserttest($table, $vars);
	}
	public static function selectone($table,$vars = []){
	    return App::get('database')->selectone($table, $vars);
	}
	public static function delete($table,$vars = []){
		App::get('database')->delete($table,$vars);
	}

	public static function edit($table, $vars = [],$id=[],$file){
		if ($file['picture']['error'] === UPLOAD_ERR_OK) { 
			$vars['picture']=$file['picture']['name'];
			$target_dir = "public/images/teams/";
			$target_file = $target_dir . basename($file["picture"]["name"]);
			move_uploaded_file($file["picture"]["tmp_name"], $target_file);
		}
		App::get('database')->edit($table, $vars,$id);
	}

}