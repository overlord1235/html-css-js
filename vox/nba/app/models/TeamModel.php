<?php 

namespace App\Models;
use App\Core\App;

class TeamModel {
	
	public static function selectAll($table){
		return App::get('database')->selectAll($table);
	}
	public static function insert($table,$vars = [],$file){
		$vars['team_logo']=$file['logo']['name'];
		$target_dir = "public/images/teams/";
		$target_file = $target_dir . basename($file["logo"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		    if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
			}
			if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($file["logo"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $file["logo"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		return App::get('database')->insert($table, $vars);
	}
	public static function selectone($table,$vars = []){
	    return App::get('database')->selectone($table, $vars);
	}
	public static function delete($table,$vars = []){
		App::get('database')->delete($table,$vars);
	}

	public static function edit($table, $vars = [],$id=[],$file){
		if ($file['logo']['error'] === UPLOAD_ERR_OK) { 
			$vars['team_logo']=$file['logo']['name'];
			$target_dir = "public/images/teams/";
			$target_file = $target_dir . basename($file["logo"]["name"]);
			move_uploaded_file($file["logo"]["tmp_name"], $target_file);
		}
		return App::get('database')->edit($table, $vars,$id);
	}

}